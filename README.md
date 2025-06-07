# Email Contact Form
In terms of prerequisites, you would need the fundamentals of html, bootstrap and PHP. You would also need
to have downloaded and configured XAMPP. 

#### Project File Structure
![image](https://github.com/user-attachments/assets/bc281648-0371-45af-9531-961d574fc2fa)
Here is the project file structure.

#### Documents
![image](https://github.com/user-attachments/assets/d6d676c2-21e7-40f3-988f-c737c58c0c14)
index.html doc

![image](https://github.com/user-attachments/assets/2cf58897-fd7d-41a6-a769-71fb0ee9a8d8)
includes/process.php doc

#### Setting an App Password
![image](https://github.com/user-attachments/assets/24094e8b-3fdf-471e-94e1-ff2cac63e763)
Go to Gmail. click to manage your google account. 
Under security, make sure you have 2-step verification on. if not, add. 

![image](https://github.com/user-attachments/assets/cca6ed35-0702-4275-b026-8df02b0696db)
In the search bar, enter and select App Passwords. You may be prompted to sign in again. 

![image](https://github.com/user-attachments/assets/c7fc6567-af08-4ac5-9e55-0692235d862d)
Give your app password a name. Then, click create. 

![image](https://github.com/user-attachments/assets/ca89a45a-9918-43eb-86f9-1a05c5df4241)
***IMPORTANT*** Make sure to copy this app password onto notepad!
click done. 


#### XAMPP File configuration changes
you would first have to alter your php.ini file located under
C:\xampp\php\php.ini
![image](https://github.com/user-attachments/assets/406ee200-6155-4e20-948e-46791a0fbc77)
make these alterations if using gmail, while also setting the sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

Locate the sendmail.ini file under C:\xampp\sendmail\sendmail.ini. set the smtp_server=smtp.gmail.com
Set the smtp_port to be 465, the same port number in the php.ini file. 
Make sure to save before closing. 

![image](https://github.com/user-attachments/assets/02472f05-0e2e-432c-aad7-771a5e046abd)
set the auth_username as your email. ex: auth_username=myEmail@example.com
set the auth_password as your app password, copied earlier. ex: auth_password=sldf lesd eouw
save before closing

![image](https://github.com/user-attachments/assets/305f3777-ed54-4741-abb7-f2d1361a501d)
in the xampp console, make sure to turn apache off and on again. 

![image](https://github.com/user-attachments/assets/a05694b3-bb8d-45ce-b696-ab74d34faeb3)
Put information into the contact form, and hit send. 

![image](https://github.com/user-attachments/assets/8bd3f48a-7f3c-4bee-91bf-b73b9697a24a)
If successful, your output will indicate this.

![image](https://github.com/user-attachments/assets/8c1932be-3e6f-463f-8490-5d50deaa8dbc)
You should also see the email in your inbox. 




