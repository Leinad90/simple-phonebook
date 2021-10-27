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
    
    public function actionDelete(int $contactId)
    {
        $this->contactModel->delete($contactId);
        $this->flashMessage('Kontakt smazán');
        $this->redirect('default');
    }


    public function createComponentForm(): Form {
        $form = new Form($this,'form');
        $form->addHidden('id');
        $form->addText('name','Jméno', maxLength: $this->contactModel::SMALL_FIELD_LENGT);
        $form->addEmail('e_mail','E-mail')->setMaxLength($this->contactModel::SMALL_FIELD_LENGT);
        $form->addText('phone','Telefon', maxLength: $this->contactModel::SMALL_FIELD_LENGT)->setHtmlType('tel');
        $form->addTextArea('note', 'Poznámka')->setMaxLength($this->contactModel::TEXT_LENGH);
        $form->addSubmit('save','Uložit');
        $form->onSuccess [] = [$this,'save'];
        return $form;
    }
    
}
