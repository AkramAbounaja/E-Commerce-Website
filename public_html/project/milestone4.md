<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Akram Abounaja (aa232)</td></tr>
<tr><td> <em>Generated: </em> 12/22/2022 7:58:03 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-4-shop-project/grade/aa232" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209243373-0e096b8f-ff7a-4e6a-8511-42aeac7c6624.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of new column on the Users table (visibility column)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209243446-d7ae74ab-a781-4d4a-8d47-1562b01c58a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209244411-c9131771-66b4-401b-970c-238f1cc06896.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of profile view and email isn&#39;t shown publicly. This is on a<br>different account &quot;akramnonadmin&quot; to show the profile is public.I didn&#39;t have time to<br>get checklist #2.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/83">https://github.com/AkramAbounaja/IT202-009/pull/83</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/profile.php?id=6">https://aa232-prod.herokuapp.com/project/profile.php?id=6</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>Public/Private profile works by fetching visibility from the Users table where the id<br>matches and checks if visibility is 1 (public) or 0 (private). if the<br>profile has visibility 1 then it can be viewed, else, a flash message<br>is given that the profile is private. The user themselves have a switch<br>on their profile that sets the visibility when switched using a sql UPDATE<br>that works with updating the same way as updating the rest of the<br>form.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209244610-49883cf1-ba59-406f-806d-d884b87612a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of Ratings table with data in it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209244799-6cd181a2-0727-45b7-b2ad-38506640e53b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the ratings table with comments/ratings applied. the form for writing comments<br>and giving ratings is shown as well<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209244885-94becd05-7e6f-483f-b260-da932d8c1485.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of error message for a user trying to rate/comment that hasn&#39;t purchased<br>the product<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/84">https://github.com/AkramAbounaja/IT202-009/pull/84</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/product_details.php?id=4">https://aa232-prod.herokuapp.com/project/product_details.php?id=4</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>Adding comments works by clicking on the details button to enter the product<br>details page and being able to leave a comment there. if the comment<br>and the rating is set, they are validated and then the user is<br>checked to see if they have actually purchased the product by checking if<br>their id is included within Orders and the OrderItems table for the specific<br>product. If they have not bought the product, they get a flash message<br>denying them, but if they have, the form information is inserted into the<br>ratings table using INSERT INTO with a confirmation at the end letting them<br>know they left the review. The AVG rating is also updated for the<br>product and placed into the products table here.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209245070-6767530c-13ec-4ff8-b0e8-c5e90f09e725.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination page 1 with url visible category filter doesn&#39;t seem to<br>work but it appears in the URL. other filters work<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209245109-18c64ecf-f78d-4d8e-ae21-d8dc52bc55c8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination page 2 with url visible category filter doesn&#39;t seem to<br>work but it appears in the URL. other filters work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/86">https://github.com/AkramAbounaja/IT202-009/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/purchase_history.php">https://aa232-prod.herokuapp.com/project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209245737-97739a65-0922-44e1-986b-e98dc3906805.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination and filters (page 1). category filter doesn&#39;t seem to work<br>but it appears in the URL. other filters work<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209245811-debb351e-5c4b-474b-b51a-c3ae706cc6c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination and filters (page 2). category filter doesn&#39;t seem to work<br>but it appears in the URL. other filters work<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209245857-9a3b6778-c65f-4b45-8a0f-94dff47eb124.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination and filters (page 3). category filter doesn&#39;t seem to work<br>but it appears in the URL. other filters work.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/87">https://github.com/AkramAbounaja/IT202-009/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/admin/list_products.php">https://aa232-prod.herokuapp.com/project/admin/list_products.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>I wasn&#39;t able to figure out total price in time. I wish I<br>had more time but I would&#39;ve went about figuring out the total price<br>by using the for each loop that displays the data to add to<br>a newly created variable that holds the total price of all the items<br>to display at the end.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209246489-6ac8574c-0e58-4079-b305-e8701deab735.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of the filters. CATEGORY FILTER DOES WORK IN SHOP UNLIKE THE PURCHASE<br>HISTORY. I did not have time to fix the purchase history ones<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209246589-03f3eb7c-5b7b-49a7-8526-f7b1e5767ee7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination page 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209246616-8524512b-ab4c-4539-b81c-c8a5e3734734.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>example of pagination page 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/88">https://github.com/AkramAbounaja/IT202-009/pull/88</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/shop.php">https://aa232-prod.herokuapp.com/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209246792-24e1bab5-9657-4f64-91b8-7606dd3c3b03.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>filter with pagination (pagination works but I do not have enough products for<br>the second page). The out of stock product is shown (&quot;0 stock test&quot;)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209246935-65433988-8b82-4da2-823c-51330e7fcd01.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of how pagination looks and works (page 1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209246979-b5637cba-8e37-4241-adcc-39c08ef41d39.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of how pagination looks and works (page 2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/88">https://github.com/AkramAbounaja/IT202-009/pull/88</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/admin/list_products.php">https://aa232-prod.herokuapp.com/project/admin/list_products.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>My approach to this view was the exact same as shop with the<br>included factor of being able to see products that aren&#39;t in stock by<br>making it &gt;= 0. I&#39;m not sure if I was ONLY supposed to<br>include the out of stock products but the owner can see the out<br>of stock products included with the results and working with pagination.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209247248-f9122dcf-c021-4c57-8e22-5171ee15e6ae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing sort in effect ascending<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209247304-3fe756eb-2fae-40c1-b254-83d26d79eb02.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing sort in effect descending (pear has a higher rating than candle)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209247389-21d91b6b-3a75-44de-9686-c8a18f073819.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of Products table with average rating<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209247544-32f576da-7b0a-401d-a738-cc5287c17382.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the code for how average rating is gotten from the ratings table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209247773-27c6e69e-2436-44ce-9aec-1446c3fc8d97.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing how avg rating is gotten from products table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209249361-c006f268-4c71-49be-9ec3-f498b3cdc580.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing how avg rating is inserted into the Products table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AkramAbounaja/IT202-009/pull/88">https://github.com/AkramAbounaja/IT202-009/pull/88</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://aa232-prod.herokuapp.com/project/shop.php">https://aa232-prod.herokuapp.com/project/shop.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on shop</td></tr>
<tr><td> <em>Response:</em> <p>The average rating recording logic works by first inserting the rating in the<br>ratings table when first submitted when the user chooses their rating and writes<br>a comment. Products table is also updated with the average rating of each<br>individual product at this stage.<div><br></div><div>when applying the sort on shop. I used a<br>SELECT average_rating from the Products table between the two values that the user<br>chose.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/113126174/209247993-58ab16c1-f0c6-4c59-9a42-c7a297cc3788.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board showing all issues are closed.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-4-shop-project/grade/aa232" target="_blank">Grading</a></td></tr></table>