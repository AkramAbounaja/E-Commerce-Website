<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Akram Abounaja (aa232)</td></tr>
<tr><td> <em>Generated: </em> 12/4/2022 11:02:21 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/aa232" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205544980-e1cb3b13-ddbe-4e8a-af6f-52f9d030255a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of add item page with valid data filled in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205545041-9cbebe89-f6a3-4f39-a28f-2f1003e9b336.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing flash message for successful product added<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205545173-1871e772-16ed-45a2-a788-a14194c69b70.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>populated products table clearly showing the columns<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>To create a product, the code uses the function get_columns($table) with $table being<br>the Products table. The function gets all of the columns from the Products<br>table and then displays it using a php foreach loop to loop over<br>all the columns as well as an if statement that checks what fields<br>we want to display. Bootstrap is used to display the forms for the<br>label as well as the input. The forms use the safer echo function<br>as well as the input_map function to clean and track inputs. Once submitted,<br>which is checked with an if statement with isset and checking for post<br>data of the submit button, the save_data() function is used to insert the<br>values into the table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/49">https://github.com/AkramAbounaja/IT202-009/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/admin/add_products.php">https://aa232-prod.herokuapp.com/project/admin/add_products.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205491457-e96f6da8-0129-4c43-985c-8eb5bfa0de6f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>heroku dev url of shop page with 10 sample items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205491662-b74ae1db-e46c-4da0-bef5-5450c9280e1c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>category filter (food category)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205491739-e7f4e407-d85c-458e-ae3e-6f16b952a968.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>search filter (searched for &quot;oo&quot;)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205491836-b1b428cc-3df0-4f59-9587-b011f3e85146.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>price sort (sorted from 15$ to 20$)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205493089-78b08cb8-5327-40aa-a513-550a995ce56e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of getting categories<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205545555-fcf1ad11-ea3c-416f-a5ec-db8077f9ddeb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of getting prices<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205545741-d0beb9cf-54e3-4253-aa6d-129bce23a9e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of name filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205546206-1235c2ac-c4d7-4453-81c3-f95e415fd725.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of category filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205546103-2963700e-ce5c-4726-8a64-6e4b2ca0ca5e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of price sort<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>The results are shown by first making a results array, getting the DB,<br>and preparing the DB under the specified conditions of stock&gt;0 and visibility=1. Then<br>the db is executed and then a fetchAll is called to store into<br>a new variable and then is stored into the results array if not<br>empty. Then with php, a foreeach loop is done to loop the results<br>array and display it using safer echo and the name value of what<br>to display from the DB. The filters do the same but they are<br>applied by checking for their submission buttons from the post such as &quot;submitCategory&quot;<br>and then matching all products with the category from the database in the<br>preparation stage of the DB. Then executing and fetching happens which results in<br>the application of the filters or sort<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/50">https://github.com/AkramAbounaja/IT202-009/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/shop.php">https://aa232-prod.herokuapp.com/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205514867-a299156f-b23e-43f8-b6b2-036b86c00def.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>heroku dev url that shows admin product list which shows visibility and non-visible<br>products too. (visibility=1 is visible, visibility=0 is non-visible, the placeholder item is invisible)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The results are shown similarly to the user page of shop.php, just without<br>any of the filters or sorting. On the DB side, the results array<br>is created,&nbsp; getdb() is called to a variable and then the db is<br>prepared for execution by selecting what we want to fetch from the table.<br>After preparation and execution, the values are fetched and stored in the results<br>array after checking if they exist. Then to display it to the user,<br>we call a php foreach function within html bootstrap to loop through the<br>results array. In the loop, we store the result in variable $item and<br>display it in the places we need using safer echo with $item and<br>the name of the DB column we want to display such as &quot;name&quot;.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/51">https://github.com/AkramAbounaja/IT202-009/pull/51</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/admin/list_products.php">https://aa232-prod.herokuapp.com/project/admin/list_products.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205492463-a2457833-7eae-405c-973a-9b0082ed72b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>heroku dev url of public shop page with edit button visible to the<br>Admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205492072-ab148033-b0f0-4557-a4e5-eee5fa6a6b0c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>heroku dev url with edit button visible to Admin on Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205515630-ac9ffbd4-9a53-44ee-b3f8-076d714a3e47.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>edit button visible to the Admin on the Admin Product List Page with<br>heroku dev url<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205492192-a400d794-4e8e-4525-b25f-0af830c1f2d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before editing cookie product<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205492264-e6d5ea2a-443b-476a-ba1d-bbb3c614b3f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after editing cookie product (changed name, description and price)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>first, the edit button is only shown to admins by checking if they<br>have that role using the has_role() function. The button itself is made with<br>bootstrap that links to edit_products.php. In edit_products.php we create a results array, get<br>all columns from table Products, getdb() to a variable, create a variable to<br>ignore the ones we do not want to show, create a id variable<br>and then prepare the db for execution. Once executed by matching the id<br>from the db to the id variable, the values are fetched from the<br>DB and if they exist, stored in the results array. To display what<br>we got from the DB to the user, we loop result using a<br>foreach in key-value pair of $column and $value. Then we use an if<br>statement to ignore displaying anything in the ignore variable. Then it is displayed<br>to the admin using bootstrap html and php by using safer echo with<br>the $column or $value for the variable. map_column() is also used to fetch<br>the columns and map them to correct field types of text, textarea, or<br>number for the input. Once what is needed to change is inputted, the<br>submit button must be pressed, which triggers an if statement that checks the<br>post of the submit button and updates the table accordingly.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/52">https://github.com/AkramAbounaja/IT202-009/pull/52</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/admin/edit_products.php?id=1">https://aa232-prod.herokuapp.com/project/admin/edit_products.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205492724-20921079-bf6e-4596-9b74-1c2aa888f3d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the button (clickable) item that directs the user to the product details page<br>is the blue details button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205492774-4570de9b-157b-486e-bf86-55e22a4f890f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>heroku dev url of the result of the Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The product_details page is the same exact process used for the admin edit_products<br>page but I changed any bootstrap html inputs to labels instead, so it<br>would just display the column and value as text. We create a results<br>array, get all columns from table Products, getdb() to a variable, create a<br>variable to ignore the ones we do not want to show, create a<br>id variable and then prepare the db for execution. Once executed by matching<br>the id from the db to the id variable, the values are fetched<br>from the DB and if they exist, stored in the results array. To<br>display what we got from the DB to the user, we loop result<br>using a foreach in key-value pair of $column and $value. Then we use<br>an if statement to ignore displaying anything in the ignore variable. Then it<br>is displayed to the admin using bootstrap html and php by using safer<br>echo with the $column or $value for the variable. all of it is<br>displayed with bootstrap labels.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/52">https://github.com/AkramAbounaja/IT202-009/pull/52</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/product_details.php?id=1">https://aa232-prod.herokuapp.com/project/product_details.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205537023-722430d6-805f-4b4b-ab79-c2cf7b936d30.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of heroku dev url with success message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205537219-8164d4c4-a20d-40b4-bb9c-5757fe86185d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of heroku dev url with message that shows user needs to be<br>logged in to add to cart with redirect to login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205537540-146c80f6-035e-43c9-bab4-45ba806d6615.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart table with some records of data in it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>The cart works by giving 1 cart per user. item_id and user_id were<br>setup as composite unique keys to ensure that there are no overlaps or<br>matches for carts between users. id, item_id, user_id, and desired_quantity are tracked by<br>int. unit_price is tracked with DECIMAL(7,2) to ensure prices can display correctly when<br>adding more quantity of a product. There are also two checks for desired_quantity<br>and unit_price with quantity having to be greater than 0 since the user<br>should want at least 1 if they are addnig it to cart and<br>unit_price being greater than or equal to 0 because we do not want<br>any negative prices.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>add to cart works by first waiting for the POST data from shop.php<br>of the name &quot;action&quot; with the value &quot;add&quot;. The safer echo function is<br>used against it and then the result is stored within a $action variable.<br>This variable is used within a switch statement that leads to the different<br>cases of add, update, and delete. For add, we setup a query to<br>INSERT into the cart table for the specific columns needed. The Vars :iid,<br>:dq and :uid are also setup within the query and we make sure<br>to highlight to increase desired_quantity by :dq when there is a duplicate key.<br>Then the database is prepared with the query and the vars we setup<br>before are binded to each value from the table using safer echo and<br>get_user_id. Then it is executed and if successful, should be added to the<br>cart.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/54">https://github.com/AkramAbounaja/IT202-009/pull/54</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205539804-d4e96f13-e9ca-45b7-b51b-96c267e8a9e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of cart view for users with all checklist items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>The cart itself is built with bootstrap HTML. all the values that the<br>cart needs to show is done with php. The items are shown in<br>the cart by doing a query to SELECT the needed information from the<br>cart table and then the db is gotten, prepared and executed with the<br>terms for only the user&#39;s user_id so only their cart is fetched. Once<br>fetchall is called, it is stored in the cart array if the cart<br>isn&#39;t empty. The information is grabbed using a foreach array within the bootstrap<br>HTML. Using safer echo as well as the name of the column allows<br>the information to be displayed. For example, se($c, &quot;name&quot;) allowed the name of<br>the item to be displayed. The subtotal was calculated by including cart.unit_price *<br>cart.desired_quantity back when the query was setup and stored within subtotal. The total<br>calculations were done by adding the subtotal of each item throughout the loop<br>to a $total variable that was setup.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/54">https://github.com/AkramAbounaja/IT202-009/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/cart.php">https://aa232-prod.herokuapp.com/project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205540517-7032072c-9e48-4e9d-a0e4-099a0b7d9d00.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before updating cart quantity<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205540685-597ca1f8-ce88-461d-84dc-d35947d2bdaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after updating cart quantity (added +1 quantity to each item)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205540849-76be165e-7a73-4f13-bc73-fe29447b03de.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before setting cart quantity to 0<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205540933-12a148fd-e73b-4181-916d-dbc6cb6c5faa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after setting cart quantity to 0 (cake was removed from cart as a<br>result)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205540933-12a148fd-e73b-4181-916d-dbc6cb6c5faa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the item is removed from cart when a negative quantity is chosen (if<br>form limit is not placed)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205541160-d9b10749-2fb4-4385-8b8e-58501aecf4b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>with form limit, a warning appears and rejects the negative quantity<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>A value of 0 is handled by removing it from the cart. This<br>is done by using a DELETE FROM query that matches id and user_id<br>to make sure we are only deleting that specific item from that specific<br>user. The query is prepared, binded to :cid and :uid and then executed.<br>The query runs when an error is caught when updating the process. For<br>negatives, In the client-side, it handled by rejecting it and stating that the<br>value must be higher than 0, on the server-side just in-case the client<br>side is bypassed, negative quantities are removed from the cart using the DELETE<br>FROM query.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/54">https://github.com/AkramAbounaja/IT202-009/pull/54</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205541322-b2641dc5-6860-406a-a94f-e5616b897493.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before deleting a single item from cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205541388-7768e0e3-370b-4a96-a120-5fd850add571.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after deleting a single item from cart (kid&#39;s toy was deleted by pressing<br>the x)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205541532-735e3890-2225-4f24-abab-f4501a3dd21d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before clearing the cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205541586-f3d6159e-1028-48a4-b75a-e1d1f3daf607.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after clearing the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>Deleting a single item from cart works by using a query of DELETE<br>FROM to delete from the cart WHERE id matches cart id and user_id<br>matches user id. This is done to make sure that delete only happens<br>on the user&#39;s cart items and not on any other user&#39;s cart items.<br>matching cart id allows only a specific item to be deleted rather than<br>the entire cart which is how clearing the cart works. For clearing the<br>cart, a query of DELETE FROM is also used but only user_id is<br>tracked and not cart_id so we still ensure that we delete our own<br>cart but now we can clear all the items at once.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/54">https://github.com/AkramAbounaja/IT202-009/pull/54</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205541803-ac948a9a-c9cc-4a81-9c66-cdb5104649a2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first screenshot of project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205542059-b3d708ab-ceca-49f5-b0f4-e086504b8456.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second screenshot of project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/205542134-30dec804-823d-4830-af25-32263d3bd52d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3rd screenshot of project board<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/login.php">https://aa232-prod.herokuapp.com/project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/aa232" target="_blank">Grading</a></td></tr></table>