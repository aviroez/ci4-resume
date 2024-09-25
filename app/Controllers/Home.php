<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('personal', $this->data);
    }

    public function contacts()
    {
        $data = $this->request->getPost();

        $contactModel = new ContactModel();
        try {
            $contactId = $contactModel->insert($data);
            if (!$contactId) {
                return redirect()->back()->withInput()->with('status', 'error');
            }
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('status', 'error');
        }
        
        return redirect()->route('index')->with('status', 'success');
    }
}
