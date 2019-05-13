#sadique -> 235
#shonchu -> 186
#anamul  -> 200

NEW-----
555 - ponick,sadique
155 - ponick,sadique
20  - all












31.170.160.61

editorguser
editorgpass
{
    "Version": "2012-10-17",
    "Id": "Policy1548436695486",
    "Statement": [
        {
            "Sid": "Stmt1548436689752",
            "Effect": "Allow",
            "Principal": "*",
            "Action": [
                "s3:DeleteObject",
                "s3:GetObject",
                "s3:PutObject"
            ],
            "Resource": "arn:aws:s3:::hae-prd-mailbox-payload/*"
        }
    ]
}

https://072727045575.signin.aws.amazon.com/console





///////////////
Remaining Task-

#1 
Implementation 
a.	Create/Edit Sites
b.	Create/Edit Organizations
c.	View Device Data
d.	Assign Devices to Sites / Organizations
e.	Request Device Data

Customer Support
a.	View Device Data
b.	Request Device Data


#2
i.A log of user access shall be saved in a file.

#3
i.	HaemoCloud shall allow for multiple clusterID’s to be assigned to an organization. (i am not sure ,may be need to change the database attribute type in order to store multiple values ?)

#4
i.	A site shall represent a geographic location where the connected devices are located.( can i get details on these ? or its already okey?)

3.	Log Request
a.	HaemoCloud shall store provide a mechanism to request logs from a device
b.	HaemoCloud shall store provide a mechanism to download requested logs from a device
4.	Data Collection
a.	HaemoCloud shall store a copy of all incoming data
b.	HaemoCloud shall interpret incoming data and store it in a database

b.	HaemoCloud shall have the ability to make dashboards from the data stored in the database
c.	HaemoCloud shall have the ability to make reports from the data stored in the database


7.	Security (not sure what is this)
a.	HaemoCloud client requests MUST be authenticated. 
b.	HaemoCloud shall use HTTP Basic Authentication, RFC 2617, is the only supported authentication protocol. 
c.	HaemoCloud shall provide RFC Authentication parameters for configuration.

8.	Encryption
a.	The HaemoCloud shall provide an encryption symmetric key service currently AES-256 encryption algorithm with CBC transformation and PKCS5 padding and all zero initial vector.
b.	The file extension shall denote the encryption being used, currently aes.

9.	Request Device Data 
a.	The HaemoCloud shall provide a mechanism to request device logs (i think we already done that ?)
b.	The HaemoCloud shall provide a mechanism to request device configuration (where to get the configuration)

10.	API (so we need to make an API?)
11.	Performance (it looks like they want to proccess error messsages into redshift)

from feed back -- can you explain in details the bellow points ?

Search
 
1)	Serial and device name are the same. Device name just puts a PCS300 in front
2)	The key for the search will be the Not Assigned Sites. That is the bulk of the work on this page besides the log download. 
User admin


organization 

1)	This seems to be getting confused with the organization username and pw. These are just the web users. The org username/passwords should be on org admin
2)	Are there any audit logs for the users? Last login etc?
 
1)	The org assignment should be radio buttons. Check boxes… User A can see org A devices and org B devices but not org C.






<?php
$base64 = base64_encode(hash("sha256", "Sandeep", true));
echo "TEST:".$base64;


 <?php
//                 $user = new App\User();
// //$user->password = base64_encode(hash("sha256", "Sandeep", true));
//                 $user->password = Hash::make('Sandeep');
// $user->email = 'the-email2@example.com';
// $user->organizationid = 8;
// $user->login = 'test2';
// $user->save();

                        if (Auth::attempt(['email' => 'the-email@example.com', 'password' => 'Sandeep'])) {

                            $user = auth()->user();
                            print($user->id);

print($user->login);

print($user->email);
      
         // Authentication passed...
        echo "Success!";
                            if (Hash::check(  'Sandeep','si2yoSsmrkZqowlJHCR7flF8qVAsYAUxDcZC65arPBk=' )) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

      


      }else{

        echo "Fail!<br/>";
        
      }



                         ?>