<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Akram Abounaja (aa232)</td></tr>
<tr><td> <em>Generated: </em> 12/22/2022 4:42:28 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/aa232" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209060193-54cd04ce-1f5a-4750-9b5d-2f88a17cd2dc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of Orders table with valid data in it from VS Code db<br>extensions. Includes all the requested columns.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209059790-723d817c-775f-4b94-968d-1e730fb6eb91.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of OrderItems table with valid data in it from VS Code db<br>extensions. Refers to the Orders table shown previously using order_id<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209093936-97dabe5d-3652-4310-9904-1264d1d0f365.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the purchase form UI from heroku with valid data filled in.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209094310-7607fc2d-1c3f-4bb2-81f7-45ca4820dc48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the items pending purchase from Heroku. Each checklist item is shown<br>at once. (Kid&#39;s toy price was changed for #2 on checklist)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209084593-3605866a-8dfd-46a5-9e4e-f4fb656a59ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Verify payment method (if no checkboxes are selected validity is false and a<br>message is flashed telling the user to select a method of payment if<br>it is true, the checked radio button input element is selected and the<br>value stored within payment method)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209085874-73fc60a7-7584-43c0-b837-06794dc62325.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>verify paid amount vs cart amount<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209086327-06936939-10f3-49f9-9896-af268bbf67bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>verify address pieces<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209086838-af99f267-fa9c-4ed4-9c1f-9962e1a3e70d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>verify stock/price of items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209095046-cd24bef1-7347-442a-abac-e3f04b11dc69.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid money received message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209096954-f4fcd32f-4776-426e-80db-aa4a40f44430.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>unavailale stock message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209096618-29664bf8-281b-465b-99be-57977f450452.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>price difference message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>The purchase process works by first having the user fill out different fields.<br>it includes validation checks to make sure the information entered is correct. once<br>the form is submitted, AJAX is used to the file add_to_orders.php. add_to_orders checks<br>all the information that has been sent and does its own validation checks.<br>If every single validation check passes, add_to_orders adds the order to the Orders<br>table as well as adds it to the OrderItems table. If adding to<br>the tables is successful, a success message is played and the cart is<br>cleared, if not, an error message is given.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/63">https://github.com/AkramAbounaja/IT202-009/pull/63</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/checkout.php">https://aa232-prod.herokuapp.com/project/checkout.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209098100-c74c06ac-e035-4bfa-b690-5039f406b9ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the order details from the purchase form and the related items<br>that were purchased with a thank you message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>The information is retrieved by first using safer echo with $_GET and &quot;prevOrderID&quot;<br>to grab the order ID from add_to_orders.php. This ID is checked to make<br>sure the person entering order_confirmation page has actually purchased an item and if<br>they haven&#39;t they will be redirected. If they have, the db is gotten<br>and then prepared to select all needed items from Orders table with an<br>INNER JOIN on OrderItems and Products where the OrderItems id matched the Order<br>id and the Product ID matches the product id. This will allow every<br>product to be able to be displayed corresponding to the order id. It<br>is executed with order id matching the id that we got with $get.<br>Within the HTML section, it is used to display all the order details<br>that we put into $results after execution. we use a foreach loop to<br>display it as well as using safer echo to clean all the items<br>that are displayed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/64">https://github.com/AkramAbounaja/IT202-009/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/order_confirmation.php">https://aa232-prod.herokuapp.com/project/order_confirmation.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209064030-823839f8-1e85-41c1-96ca-1a7b7cb77ff2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing purchase history for a user with a few records. More details<br>button can be clicked to view full details.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209097419-60c69f3e-8f76-4044-8a12-8db5138727f9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing full details of a purchase (order details page)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>The logic for showing the purchase history is just a simple database preparation<br>and execution to select and execute all orders that match the logged in<br>user&#39;s user_id to the user_id of the orders in the table. Once executed<br>it is displayed with HTML and php using a for-loop and safer echo<br>to clean the $items as well.The order details works by using an href<br>to redirect with a query string parameter prevOrderID and a safer echo of<br>&quot;id&quot; from $item that is set to id which we received from the<br>database. I made it into a button with HTML.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/65">https://github.com/AkramAbounaja/IT202-009/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/purchase_history.php">https://aa232-prod.herokuapp.com/project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209061183-f4d52fe5-f8ba-4adf-90a1-3f30dc0d743f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing purchase history from multiple users. A list item is included to<br>view the full details in Order Details page and Results shows the username<br>of each person within the card header<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209061492-8fde5f8b-180c-4c61-9337-a71c82905f0d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing full details of a purchase (Order Details Page). the user is<br>a non store owner (akramtest2 is) and the URL is shown which shows<br>how order data is passed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>Showing the purchase list and displaying the Order Details works by getting the<br>db and preparing all the info from the Orders table as well as<br>using a JOIN to be able to recieve the User&#39;s id when it<br>matched Orders.users_id (this is used to show the username of the person who<br>made the order). After preparing the db it is executed without specification on<br>the user&#39;s id, which is different from the user&#39;s purchase history feature, since<br>having that specification would only allow the user to see their own orders,<br>and then it is displayed with an HTML form and a php for<br>loop to grab the info that was prepared from the db. The info<br>grabbed from db is displayed using se, or saferecho, to clean the info<br>to prevent anyone from injecting code. the Order Details button works by using<br>an href to go to the order details page with the order ID<br>within the link using safer echo and the id grabbed from the db.<br>The order details page uses that info to display the page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/66">https://github.com/AkramAbounaja/IT202-009/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/admin/all_purchase_history.php">https://aa232-prod.herokuapp.com/project/admin/all_purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209063188-ff16150e-0bb3-44f2-be6b-aeb9e6fa37ba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Checkout button is used to place the order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209063351-3d836ccb-4816-40ab-bd11-c49723c39b89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of complete issues from project board. the last 6 are from Milestone3<br>and are all complete issues. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/aa232" target="_blank">Grading</a></td></tr></table>