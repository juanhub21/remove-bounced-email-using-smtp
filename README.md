php smtp email validation and remove bounced emails.

Email Syntax can check whether an email address has a valid format. however, in order to check if the email address actually exists, you will ahve to query the email domain for the existence of the email address.

the PHP class encaptulates the SMTP transation between the remote domain, as well as the DNS lookup for the Mail Transfer Agent(MTA) responsible for that domain.

The class can take a number of email addreses, and return whether they are valid or not, It will group together emails with the same domain, and create a single SMTP connection to the MAT for those emails for efficiency.

This class is meant to be a secondary validation of an email adress after email syntax is validated. It can also provide intermediate email validation before sending a confirmation email to the email address, which does not provide user feedback if the email is invalid-and thus loss of users.

Example Usage.
if you run the this code, you can see input data and output data textarea field in first page.
once you put email list in input data field, then click filtering button, then rest email list that removed bounced emails will output in next field. and you can see also how many emails you have put in and how many emails are filterd.
there is a limit in here. you can validate max 100 email lists in one time.

*** if you use vpn in your server, it won't work correctly. please don't forget it.
....

