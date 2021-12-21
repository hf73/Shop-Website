# Project Name: (Which Project)
## Project Summary: (Copy from proposal)
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (Heroku Prod of Project folder)
## Your Name:

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
- [x] (10/07/2021 of completion) User will be able to register a new account
  -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://hf73-prod.herokuapp.com/Project/register.php
    - Pull Requests
       - https://github.com/hf73/IT202-9/pull/4
    - screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/70991020/141411762-21671faf-6a3e-47fa-925f-969f1f75dff8.png)
        - Screenshot #1 Form Fields for Username, Email, Passowrd, Confirm password are valid
      
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141333117-42ad72b0-975b-457a-8a22-ddecbe5884c1.png)
        - Screenshot #2 Users Table 
       
       - Screenshot #3 ![image](https://user-images.githubusercontent.com/70991020/141334382-93487185-4d80-4fb8-823e-d81afd04963f.png)
         - Screenshot #3 Passwords must be hashed
       
       - Screenshot #4 ![image](https://user-images.githubusercontent.com/70991020/141334593-337a701f-2522-4c4e-a855-fad7c0767b70.png)
         - Screenshot #4 Getting error message for Email not being unique
       
       - Screenshot #5 ![image](https://user-images.githubusercontent.com/70991020/141334792-c67b8d64-233b-41ca-bda8-685f7836798d.png)
         - Screenshot #5 Error message for username not being unique
       
       - Screenshot #6 ![image](https://user-images.githubusercontent.com/70991020/141354496-fb642f63-f1e2-4acd-8773-3a49c9a14477.png)
         - Screenshot #6 System should let you know if username or email is taken, only passwords are removed


- [x] (11/11/2021 of completion) User will be able to login to their account
  -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://hf73-prod.herokuapp.com/Project/login.php
    - Pull Requests
       - https://github.com/hf73/IT202-9/pull/38
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/70991020/141377547-de0aeb5e-03d5-4540-9648-c36ba07a4d86.png)
        - Screenshot #1 Attempting to login with Email
      
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141377632-75773894-d913-408a-98cb-3e6bf02bf023.png)
        - Screenshot #2 Successful login with email

      - Screenshot #3 ![image](https://user-images.githubusercontent.com/70991020/141377720-df417014-72ae-4f68-a26f-8cbdea26ce54.png)
        - Screenshot #3 Attempting to login with Username
      
      - Screenshot #4 ![image](https://user-images.githubusercontent.com/70991020/141377754-d851d3c7-4cd5-4187-bc7a-13fe37b9d00c.png)
        - Screenshot #4 Successful login with username
      
      - Screenshot #5 ![image](https://user-images.githubusercontent.com/70991020/141377777-c0a60e3d-e693-43c4-90e3-837e2b5b7c87.png)
        - Screenshot #5 Trying to login with an account that doesn't exist
      
      - Screenshot #6 ![image](https://user-images.githubusercontent.com/70991020/141379360-afc73dff-1cd2-40c8-9c90-9efcdf92306c.png)
        - Screenshot #6 Trying to login with an incorrect password
      
      - Screenshot #7 ![image](https://user-images.githubusercontent.com/70991020/141377862-2c5a74c9-5f1f-471e-8bce-96df50cd7007.png)
        - Screenshot #7 Logging in fetching user's roles and information
      
      - Screenshot #8 ![image](https://user-images.githubusercontent.com/70991020/141377897-05025398-1d6b-481d-8671-6c1dcc2d8313.png)
        - Screenshot #8 User is redirected to Home page on login
      
      - Screenshot #9 ![image](https://user-images.githubusercontent.com/70991020/141377983-6db4b4a3-95c2-40e2-a0d8-9eaa0f9d5f6a.png)
        - Screenshot #9 The page is protected

  

- [x] (11/11/2021 of completion) User will be able to logout
  -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://hf73-prod.herokuapp.com/Project/logout.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/39/
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/70991020/141379193-b7f6dfc3-ac7b-457d-a4b6-a89f098d3e45.png)
        - Screenshot #1 Successful logout message + redirected to login page
      
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141379236-08824810-5102-4243-8940-b48f8712acd7.png)
        - Screenshot #2 Page is protected and you can't go back
      
- [x] (11/11/yyyy of completion) Basic Security Rules Implemented
  -  List of Evidence of Feature Completion
    - Status: Completed (Completed, Partially working, Incomplete, Pending)
    - Direct Link: 
      - https://hf73-prod.herokuapp.com/Project/login.php
      - https://hf73-prod.herokuapp.com/Project/admin/list_roles.php
      - https://hf73-prod.herokuapp.com/Project/admin/assign_roles.php
      - https://hf73-prod.herokuapp.com/Project/admin/create_role.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/40
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/70991020/141409642-11f4098b-b28f-4dbf-95d6-ade1b07e5b1f.png)
        - Screenshot #1 security showing that you must be logged in to view page

      - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141409672-9f47c868-60a3-4534-a055-f6076acf644a.png)
        - Screenshot #2 Code to check if user is logged in

      - Screenshot #3 ![image](https://user-images.githubusercontent.com/70991020/141409693-664e79f5-d96d-4a48-ab88-47d7eea11064.png)
        - Screenshot #3 Access not allowed to admin page

      - Screenshot #4 ![image](https://user-images.githubusercontent.com/70991020/141409737-492926a1-1e72-40e3-9496-1fe541b85e10.png)
        - Screenshot #4 table showing roles given to users

      - Screenshot #5 ![image](https://user-images.githubusercontent.com/70991020/141409764-e644819a-9791-40fd-83b2-b5002a401b09.png)
        - Screenshot #5 avaiable roles
        

- [x] (11/11/2021 of completion) Basic Roles Implemented
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: 
      - https://hf73-prod.herokuapp.com/Project/admin/list_roles.php
      - https://hf73-prod.herokuapp.com/Project/admin/assign_roles.php
      - https://hf73-prod.herokuapp.com/Project/admin/create_role.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/41
    - Screenshots
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/70991020/141410141-b5687903-4923-45f0-b60b-8b2efb097052.png)
        - Screenshot #1 Roles table

     - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141410194-fb9f4252-75b8-43ec-84bc-036a35c25b4e.png)
        - Screenshot #2 User roles table
        
     - Screenshot #3 ![image](https://user-images.githubusercontent.com/70991020/141410267-9f03a0b8-2196-4d33-974f-36c8d4a35a95.png)
        - Screenshot #3 entry not allowed without permission


- [x] (11/11/2021 of completion) Site should have basic styles/theme applied; everything should be styled
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://hf73-prod.herokuapp.com/Project/nav.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/35
    - Screenshots
     - Screenshot #1 <img width="1128" alt="adding styling" src="https://user-images.githubusercontent.com/70991020/141322666-543043d6-43b9-4e0a-91f4-ccaec164daf5.PNG">
        - Screenshot #1 Capture of the current style of the page
          


- [x] (11/11/2021 of completion) Any output messages/errors should be “user friendly”
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://hf73-prod.herokuapp.com/Project/flash.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/5
    - Screenshots
     - Screenshot #1 <img width="1128" alt="user friendly error messages" src="https://user-images.githubusercontent.com/70991020/141326103-20be3faa-4f20-4c54-8cf7-ec16471fc664.PNG">
        - Screenshot #1 Screenshot of invalid password error message
     
     - Screenshot #2 <img width="1128" alt="user friendly error messages invalid email" src="https://user-images.githubusercontent.com/70991020/141326194-60808756-3a5c-44a1-8764-36dee40d46b9.PNG">
        - Screenshot #2 Screenshot of invalid email address error message
          
    - Screenshot #3 ![image](https://user-images.githubusercontent.com/70991020/141410766-cab55388-e8d5-4649-be6e-365650c3111f.png)
        - Screenshot #3 removed non user friendly messages that was shown previously.

- [x] (11/11/2021 of completion) User will be able to see their profile
  -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://hf73-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/42
    - Screenshots
     -  Screenshot #1 <img width="1128" alt="see and edit profile" src="https://user-images.githubusercontent.com/70991020/141323979-98f66295-158d-4b78-9400-d4e7ccc34dd9.PNG">
        - Screenshot #1 Capture of Profile button on top and being able to see profile.
          



- [x] (11/11/2021 of completion) User will be able to edit their profile
  -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://hf73-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - https://github.com/hf73/IT202-9/pull/42
    - Screenshots
     - Screenshot #1 <img width="1128" alt="updated profile" src="https://user-images.githubusercontent.com/70991020/141324974-5d9c9f20-d49c-4efa-9ebb-8650a9f6a39a.PNG"> 
        - Screenshot #1 Capture of User updating password in profile.

     - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141411663-4e668c61-33fe-466a-9854-35960aefc063.png)
        - Screenshot #2 Checking if username is available
           
    - Screenshot #2 ![image](https://user-images.githubusercontent.com/70991020/141411683-2a01ec06-d04e-44d7-8bc5-6174dff9b676.png)
        - Screenshot #2 validating if current password is correct
        


<table><tr><td>milestone 2</td></tr><tr><td><table><tr><td>F1 - User with an admin role or shop owner role will be able to add products to inventory (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/admin/add_item.php](https://hf73-prod.herokuapp.com/Project/admin/add_item.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/49/](https://github.com/hf73/IT202-9/pull/49/)</p></td></tr><tr><td><table><tr><td>F1 - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144683525-a6046911-7fb9-43f8-ac83-bfe4a3894d0d.png"><p>Table named Products</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144683596-42cd35e8-c13f-478d-aac0-c3874836491f.png"><p>Admin adding items page</td></tr></td></tr></table></td></tr><table><tr><td>F2 - Any user will be able to see products with visibility = true on the Shop page ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/shop.php](https://hf73-prod.herokuapp.com/Project/shop.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/50](https://github.com/hf73/IT202-9/pull/50)</p></td></tr><tr><td><table><tr><td>F2 - Product list page will be public (i.e. doesn’t require login)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144687450-52e794d9-a071-4fc8-a7d1-801072112efa.png"><p>Product list page will be public (i.e. doesn’t require login)

</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - Limit results to 10 most recent<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144687516-3053637e-3d43-4a12-8ccb-9a525a94d1d3.png"><p>Limit to 10 per page</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by category<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144687819-1dc8d9db-b3b4-45b6-a68d-5d7277b770ff.png"><p>User will be able to filter results by category, partials, price</td></tr></td></tr></table></td></tr><table><tr><td>F3 - Admin/Shop owner will be able to see products with any visibility ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/admin/list_item.php](https://hf73-prod.herokuapp.com/Project/admin/list_item.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/51](https://github.com/hf73/IT202-9/pull/51)</p></td></tr><tr><td><table><tr><td>F3 - This should be a separate page from Shop, but will be similar<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144688150-c19faf27-5d43-4dab-ae29-5b0262ffbbe6.png"><p>Seeing all items regardless of visibility on a different page.
</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - This page should only be accessible to the appropriate role(s)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144688257-51ba7c0a-05eb-4024-aed8-25f3666a322b.png"><p>Getting kicked if doesn't have admin role.</td></tr></td></tr></table></td></tr><table><tr><td>F4 - Admin/Shop owner will be able to edit any product ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/admin/edit_item.php](https://hf73-prod.herokuapp.com/Project/admin/edit_item.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/52](https://github.com/hf73/IT202-9/pull/52)</p></td></tr><tr><td><table><tr><td>F4 - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144688394-c79f45f7-bfc6-4b79-b62d-00c442632869.png"><p>Edit Accessible from anywhere</td></tr></td></tr></table></td></tr><table><tr><td>F5 - User will be able to click an item from a list and view a full page with more info about the item (Product Details Page) (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/product_details.php](https://hf73-prod.herokuapp.com/Project/product_details.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/59](https://github.com/hf73/IT202-9/pull/59)</p></td></tr><tr><td><table><tr><td>F5 - User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144691970-4210cbed-b06d-4a71-a384-f83d9a6c91d0.png"><p>Description list that will be formatted.</td></tr></td></tr></table></td></tr><table><tr><td>F6 - Feature 6 ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/cart.php](https://hf73-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/53](https://github.com/hf73/IT202-9/pull/53)</p></td></tr><tr><td><table><tr><td>F6 - User must be logged in for any Cart related activity below<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144688841-9d1d47a3-8249-4721-8168-0ca5ca0d2373.png"><p>Getting userid or cart will not work</td></tr></td></tr></table></td></tr><table><tr><td>F7 - User will be able to add items to Cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/cart.php](https://hf73-prod.herokuapp.com/Project/cart.php)</p><p>

 [https://hf73-prod.herokuapp.com/Project/shop.php](https://hf73-prod.herokuapp.com/Project/shop.php)</p><p>

 [https://hf73-prod.herokuapp.com/Project/api/purchase_item.php](https://hf73-prod.herokuapp.com/Project/api/purchase_item.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/54](https://github.com/hf73/IT202-9/pull/54)</p></td></tr><tr><td><table><tr><td>F7 - Cart will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144689132-d027f5dc-0ad1-48b4-a8bf-2e196be3cd6a.png"><p>Cart will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)
</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F7 - Adding items to Cart will not affect the Product's quantity in the Products table<tr><td>Status: pending</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144689200-fa533d69-4e30-4f24-a2b3-d25f9037c9b2.png"><p>Not linked to quantity from products table</td></tr></td></tr></table></td></tr><table><tr><td>F8 - User will be able to see their cart ()</td></tr><tr><td>Status: incomplete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/cart.php](https://hf73-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/55](https://github.com/hf73/IT202-9/pull/55)</p></td></tr><tr><td><table><tr><td>F8 - List all the items<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144689373-a2b89c84-2e7c-40c3-8170-72c777d39b7c.png"><p>List of all items</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show subtotal for each line item based on desired_quantity * unit_cost<tr><td>Status: pending</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144689438-a737d9d8-c69d-41a9-8818-3c95ac4590c9.png"><p>Showing subtotal code</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show total cart value (sum of line item subtotals)<tr><td>Status: incomplete</td></tr><tr><td><img width="100%" src=""><p>I was unable to implement a way to get the full total rather than the subtotal. I was unable to figure out how to loop the subtotal to keep adding for every instance.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Will be able to click an item to see more details (Product Details Page)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144690176-c9dcf08e-0edd-445e-8d31-da79cd94b215.png"><p>More info link is provided that links to product_details.php</td></tr></td></tr></table></td></tr><table><tr><td>F9 - User will be able to change quantity of items in their cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/shop.php](https://hf73-prod.herokuapp.com/Project/shop.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/57](https://github.com/hf73/IT202-9/pull/57)</p></td></tr><tr><td><table><tr><td>F9 - Quantity of 0 should also remove from cart<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144691165-9474baf7-04f8-4cd1-9694-c6ef16f7edc8.png"><p>Slider to change quantity with 0 removing the item</td></tr></td></tr></table></td></tr><table><tr><td>F10 - User will be able to remove a single item from their cart vai button click ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/cart.php](https://hf73-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/56](https://github.com/hf73/IT202-9/pull/56)</p></td></tr><tr><td><table><tr><td>F10 - User will be able to remove a single item from their cart vai button click<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144691011-cb561453-279d-4b44-92b0-24615da92704.png"><p>removing item if set to 0 and pressing "Update quantity"

</td></tr></td></tr></table></td></tr><table><tr><td>F11 - User will be able to clear their entire cart via a button click ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/cart.php](https://hf73-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/58](https://github.com/hf73/IT202-9/pull/58)</p></td></tr><tr><td><table><tr><td>F11 - User will be able to clear their entire cart via a button click<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/70991020/144691279-77a24d12-5d58-4fae-8f19-9aaf21809c60.png"><p>code to remove cart</td></tr></td></tr></table></td></tr></td></tr></table>
  
- Milestone 3
  
<table>
<tr><td>milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - User will be able to purchase items in their Cart (2021-12-10)</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://hf73-prod.herokuapp.com/Project/sql/008_create_table_order.sql](https://hf73-prod.herokuapp.com/Project/sql/008_create_table_order.sql)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hf73/IT202-9/pull/70](https://github.com/hf73/IT202-9/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Create an Orders table (id, user_id, created, total_price, address, payment_method)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/70991020/145884235-c94ee567-2dce-45ae-bbe8-efd4fe901e49.png">
<p>Orders table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Create an OrderItems table (id, order_id, product_id, quantity, unit_price)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/70991020/145884299-71a97ca4-943b-411c-ae2a-d679645daf60.png">
<p>Orders item table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Checkout Form</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/70991020/145884980-a6ebdeb9-4951-4247-8567-b898761db56f.png">
<p>Checkout form asking for payment method not card number</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - User will be asked for their Address for shipping purposes</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/70991020/145885076-c4288a2f-eaa0-4eb9-89b4-25f7bf7410f2.png">
<p>A form is present however could not figure out how to validate it, tried validating on purchasing using the isset($_POST("purchase") and then validating to see if it is null after, however it did not work.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Feature 2 (2021-12-10)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F2 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>
- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
