<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Akram Abounaja (aa232)</td></tr>
<tr><td> <em>Generated: </em> 11/13/2022 11:19:21 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/aa232" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201574220-626fbcd8-912f-4c7b-a9fd-11047b1fa4ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email, username, password (password too short) and passwords not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201548883-823b846f-9241-4ae3-8520-23468b30d238.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email not available validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201548953-7f2c11f3-9e64-449a-9c25-81938e6b620c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username not available validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549020-107185a0-1b18-4fc2-ae66-9da60ddecda8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid data filled in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549062-c04050eb-70a9-4a72-9390-e45863b7b3e1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid user data from Task 1 (akramtest2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/9">https://github.com/AkramAbounaja/IT202-009/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form is submitted as method post so the data does not show<br>in the URL because it is sensitive information. The form is handled in<br>HTML with input fields of different types. The validation logic in the front<br>end is within the input types with things such as &quot;required&quot; and &quot;required<br>minlength&quot;. The validation logic in the back end is done with php by<br>using sanitizer functions of is_valid_email(), is_valid_username, and other if statements. Server-Side validation is<br>essentially done with filters. Password is handled with hashes, a bcrypt algorithm and<br>a built in salt value to make sure the passwords cannot be decrypted.<br>The DB is utilized to store the email, password and username typed into<br>the form into the Users table to allow registration and prepare for future<br>log in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549286-36644eaa-d2a9-4bbb-a465-0c8a0625ac8e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549309-e25ca5b8-0c0f-46a6-9257-5c1421dce06d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549337-2baaef39-8bd2-4ad7-8b20-209f64908c7f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of successful login with redirect to home and flashmessage<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/11">https://github.com/AkramAbounaja/IT202-009/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form is handled within PHP and is submitted as post so sensitive<br>information isn&#39;t shown in the link. It is handled in HTML with different<br>labels and input types for the email/username and the password. The frontend validation<br>logic is within the input types with &quot;required&quot; in the label for email<br>and &quot;required minlegnth=8&quot; in the label for password. The backend validation logic is<br>done with sanitation and sanitizer functions such as is_valid_email() and is_valid_username. The password<br>is handled using password_verify() to check if the inputted password matches the hash<br>that is stored into the database. The database is utilized to set our<br>session data after the password is verified and the user is logged in.<br>The session data also prepares and fetches the roles that the user has<br>and adds it to the session.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549498-03dd68de-dd7f-40fe-b32d-0dd23dd19b31.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful logout with message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549531-5efd407c-73bf-4318-84f1-dd2139e43f1f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message about not being logged in when trying to go to home. it<br>redirects to login page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/11/">https://github.com/AkramAbounaja/IT202-009/pull/11/</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Session logic is used for login to set session data from the database<br>after the user&#39;s password is verified when logging in. It is also used<br>to fetch roles from the database and set it to the user&#39;s session.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201549531-5efd407c-73bf-4318-84f1-dd2139e43f1f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message showing must be logged in to view page (home)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201550117-6c1623f9-ead3-4e03-a640-8868ee05b58f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message about having no permission to enter the admin pages<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201550160-8e53135b-599a-4b36-a59a-209f01d670db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table showing Admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201550190-552c6fca-d14e-49f3-9b6f-638a33044e5e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User roles table showing that user id 1 is admin user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/20">https://github.com/AkramAbounaja/IT202-009/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The session is used to check if the user is logged in. If<br>the user is logged in, that means the session is set/taken from the<br>DB. The session stores the information across multiple pages, so when accessing login-protected<br>pages, the information shows that you have access to those pages.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For role-protected pages, the process is similar to login protected pages but the<br>session is used to check if the user has a specific role using<br>a user_helper function that we created called has_role($role). The function checks if the<br>user is logged in and if the session is set with a user<br>and the roles array with the roles being checked if the specific user<br>has it equal to the role specified in the function.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201558812-1c58e86d-8d60-466f-ba46-0418d23d9b05.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Styled Navigation and clean UI changed from hideous example.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201558962-a95534e4-4b2c-4ea2-8665-9834924ff81a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>styled forms with input border radius at 30px<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201559092-2b152a39-85c9-4a5f-a651-187660c6e71d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clean data output manner<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/20">https://github.com/AkramAbounaja/IT202-009/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Nav was styled with parameter &quot;display: inline&quot; to make sure navigation elements stayed<br>on one line rather than a list. nav was styled with white text<br>and a black background color with &quot;background-color&quot; and &quot;color&quot; forms were styled with<br>border-radius at 30px to have slightly rounded corners. the body was styled with<br>a baby blue background color (rgb: 8, 225, 232) with the normal color<br>parameter in black.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201548691-94b846f2-12ca-4937-a7f1-204573a06b5a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3 error messages that can happen when logging in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/15">https://github.com/AkramAbounaja/IT202-009/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>We have been using a flash message system. Essentially, flash.php creates a div<br>container for our messages and in the container it checks if we have<br>messages. If we do, it wraps the messages and displays the content in<br>a user-friendly way instead of the dump of errors that it displayed before.<br>It is called by using flash() every time we want a message to<br>show.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201550441-ab70ac6e-24b5-4e18-bdac-d1629746ed7c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email and username prefills in profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/18">https://github.com/AkramAbounaja/IT202-009/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The data is retrieved from the user and displayed in the form by<br>using the get_user_email() and get_username() functions and putting them in variables then use<br>the safer echo function with&nbsp; the variables of the email and the username<br>and placing them within the input types of email and text. It is<br>basically the method to prefill forms. Password is not preloaded.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201551190-b2b50815-8204-4309-9c11-fe1e7c7b1343.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username, email and password validation message.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201551248-7a5fd6ee-e0d7-4368-8b81-dce9c8d04f8f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email already in use message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201551280-090a7ab3-042d-4426-a7e4-4710a11b11bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username already in use message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201551319-a1308591-8b96-4c19-bbc5-b016cd5a539d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201551387-5d82086a-c572-4491-85d1-86c05969dac5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before editing profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201551469-b7722148-2a76-4766-8db0-5927a1e4239a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after editing profile. akramtest2 email and username changes to akramtest22. password is changed<br>as well.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/18">https://github.com/AkramAbounaja/IT202-009/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>When the form is posted, (checked using key &quot;save&quot; on the submit button),<br>it gets the email and username from the post and builds out the<br>mapping variables. It then gets the database and creates a new database query<br>that updates the Users table with the email and username that we retrieved<br>and passed in with matching ids (which only updates one record). Mapping and<br>Database only happens when valid. Validation works by using two functions which are<br>is_valid_email() and is_valid_username(). If they aren&#39;t valid, the previous things of building out<br>the mapping variable and getting the database query will not execute because hasError<br>is now true.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201570197-49ba81d2-93d5-4cfc-9a60-76e6f1b1fb00.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first 5 issues. one for each milestone feature. in project board perspective.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/201570336-4a0ecb05-29a5-4abf-a107-4f2fa8a60d63.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2nd screenshot for the other 4 issues. one for each milestone feature. in<br>project board perspective.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/AkramAbounaja/projects/1/">https://github.com/users/AkramAbounaja/projects/1/</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/login.php">https://aa232-prod.herokuapp.com/project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/aa232" target="_blank">Grading</a></td></tr></table>