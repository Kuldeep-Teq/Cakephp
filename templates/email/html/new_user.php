<?php
public function add()
{
    $user = $this->Users->newEmptyEntity();
    if($this->request->is('post')){
        $userTable = TableRegistry::get('Users');
        $name = $this->request->getData('name');
        $email = $this->request->getData('email');
        $user = $userTable->newEntity($this->request->getData());
            if($userTable->save($user)){
                $user->name = $name;
                $user->email = $email;
                
                $mailer = new Mailer('default');
                $mailer
                    ->setTransport('smtp'); //your email configuration name
                    ->setViewVars([ //email view variables
                        'name' => $name,
                        'email' => $email,
                        ])
                    ->setFrom(['noreply[at]codethep!xel.com' => 'Code The Pixel'])
                    ->setTo($email)
                    ->setEmailFormat('html')
                    ->setSubject('Verify New Account')
                    ->viewBuilder()
                        ->setTemplate('new_user');
                $mailer->deliver();
                
                $this->Flash->success(__('Your account has been registered.'));
                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('Registration failed, please try again.'));
            }
    }
    $this->set(compact('user'));
}

?>