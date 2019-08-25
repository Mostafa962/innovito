<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Mail;

class CoordinatorsImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $email_validity = User::where('email', $row['email'])->first();
            if($email_validity)continue;

            $password = time();
            $user = User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => bcrypt($password),
                'image' => coordinatorDefaultImage()->link,
                'header_image' => coordinatorDefaultHeader()->link,
            ]);
            $user->assignRole('coordinator');

            Mail::send('emails.password_sending',['user' => $user, 'password' => $password],function($message) use ($user, $password){
                $message->to($user->email,$user->name)
                        ->subject('Success Registration');
                $message->from('tashtebk@gmail.com','Innovito Team') ;
            });

        }
    }
}
