# Project Name: SIMPLE SHOP
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: https://github.com/hf73/IT202-9/tree/prod/public_html/Project
## Project Board Link: https://github.com/hf73/IT202-9/projects/1
## Website Link: https://hf73-prod.herokuapp.com/Project
## Your Name: Hany Fathy

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
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
        
- Milestone 2

- [ ] (mm/dd/yyyy of completion) User with an admin role or shop owner role will be able to add products to inventory
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) Any user will be able to see products with visibility = true on the Shop page
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) Admin/Shop owner will be able to see products with any visibility
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) Admin/Shop owner will be able to edit any product
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User must be logged in for any Cart related activity below
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User will be able to add items to Cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User will be able to see their cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User will be able to change quantity of items in their cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User will be able to remove a single item from their cart vai button click
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] (mm/dd/yyyy of completion) User will be able to clear their entire cart via a button click
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show


      
- Milestone 3
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
