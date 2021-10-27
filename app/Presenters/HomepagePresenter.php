<?php

declare(strict_types=1);

namespace app\Presenters;
use Nette\Application\UI\Form;


use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
        private \app\Services\ContactModel $contactModel,
    ) {
        parent::__construct();
    }
    
    public function save(Form $form, $formData)
    {
        $formData['link']= \Nette\Utils\Strings::webalize($formData->name);
        if(empty($formData->id)) {
            unset($formData->id);
            $this->contactModel->insert($formData);
            $this->flashMessage('Kontakt byl přidán');
        } else {
            $this->contactModel->update($formData);
            $this->flashMessage('Kontakt aktualizován');
        }
        $this->redirect('default');
    }
    
    public function actionEdit(int $contactId)
    {
        $contact = $this->contactModel->getDetail($contactId);
        $this['form']->setDefaults($contact);
        $this->setView('new');
    }


    public function actionDetail(int|string $contactId)
    {
        $this->template->contact = $contact = $this->contactModel->getDetail($contactId);
        if(is_null($contact)) {
            $this->error('Kontakt nenalezen',404);
        }
        $this->canonicalize('detail',$contact['link'].'_'.$contact['id']);
    }


    public function renderDefault()
    {
        $this->template->contacts= $this->contactModel->getAll();
    }
    
    public function createComponentForm(): Form {
        $form = new Form($this,'form');
        $form->addHidden('id');
        $form->addText('name','Jméno', maxLength: 255);
        $form->addEmail('e_mail','E-mail')->setMaxLength(255);
        $form->addText('phone','Telefon', maxLength: 255)->setHtmlType('tel');
        $form->addTextArea('note', 'Poznámka');
        $form->addSubmit('save','Uložit');
        $form->onSuccess [] = [$this,'save'];
        return $form;
    }
    
}
