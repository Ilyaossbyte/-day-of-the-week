linux
1. Open the command line/terminal.

2. Navigate to the folder where you placed this project, like this: cd /Desktop/date.

3. Type php -S localhost:8000.

4. In your browser, type: http://localhost:8000/Date.php.

windows 10:

Go to the official PHP website: php.net.
   Choose the version of PHP you want to install and download the ZIP archive for Windows.
Extract the archive:

   Extract the downloaded ZIP archive to a convenient location, for example, C:\php.
Set up environment variables:

   Open the "Control Panel" and go to "System and Security" > "System".
   Click on "Advanced system settings".
   In the opened window, click on the "Environment Variables" button.
   In the "System variables" section, find the Path variable, select it, and click "Edit".
   Add a new path to the folder where you extracted PHP (e.g., C:\php), and click "OK".
Configure the php.ini file:

   In the PHP folder, find the php.ini-development file and rename it to php.ini.
   Open php.ini in a text editor and configure the necessary parameters (for example, enable the extensions you need).
Check the installation:

   Open the command prompt (cmd) and type php -v. If the installation was successful, you will see information about the PHP version.

Now PHP is installed on your Windows 10 computer. You can use it for web application development or in conjunction with a web server like Apache, which comes with XAMPP.

Install PHP and add to PATH:
Download PHP for Windows:  

   https://windows.php.net/download (choose the version with VS16 x64 Thread Safe or Non Thread Safe, depending on your system).
Extract the archive to a convenient folder (e.g., C:\php).
Add PHP to the PATH environment variable:
Press Win + S → type "change system environment variables" → select "System Settings".
In the "Advanced" tab → "Environment Variables".
In the "System variables" section, find Path → click "Edit" → "New" → specify the path to the PHP folder (e.g., C:\php).
Save the changes and restart CMD.
Open CMD and navigate to the project folder:
cmd
cd C:\projects\pet_project
   If there are spaces in the path, use quotes:
cd "C:\My Projects\pet_project"

Start the built-in PHP server:
php -S localhost:8000


   If PHP is not added to PATH, specify the full path:
C:\php\php.exe -S localhost:8000

in the browser write localhost:8000/Date.php
or localhost:8000/Date(1).php
