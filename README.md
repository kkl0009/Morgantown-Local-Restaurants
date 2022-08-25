**NOTE: This is not the original repository for this project. The original version has over 200 commits in it**

**Link for accessing web app:** http://3.234.226.236/

# WVU_CS230_2020.08_Group06
---

## Contents
[Overview](#Overview)

[Milestone 1](#Milestone-1)

[Milestone 2](#Milestone-2)

[Milestone 3](#Milestone-3)

[Milestone 4](#Milestone-4)

[Updated Project Design](#Updated-Project-Design)

---

## Overview

   Our web application, called Hub for Grubs, acts as a means to connect people in the Morgantown area to local restaurants and other eateries. It is primarily targeted towards WVU students, particularly new students who are unfamiliar with the Morgantown area. Users will first be directed to a home page with pictures of various foods from local Morgantown restaurants. These pictures will each lead the user to the specific page for the particular restaurant the food is from. A user may create an account on a signup page, and afterwards may log into their account. They will then be directed to their profile, where they can see much of their stored information displayed, and where they can change the information stored in the database. Once logged in, users may browse restaurants on a browsing page. On this page, the users may make use of the search bar to search for restaurants by name, address, or tags. Clicking on any restaurant will take the user to a unique page for that restaurant, where they may also write reviews or view reviews for that restaurant made by another user. The user may also view a map, which will allow them to browse restaurants locally by map, although clicking on a part of the map will redirect them to Google Maps. Additionally, the user may access an About Us page, which displays information about the developers of the web application and contains an area where they may email the developers to suggest changes to the site. Finally, there is a mailbox that users may access that allows them to view announcements sent out by administrators of the web application, and clicking on any of the announcements will redirect the user to an external site related to the message. If the user wishes to logout, they may select the logout function on the header and they will exit their current session, requiring them to log in once again upon returning to the site to use any of the features.

## Milestone 1

Group 6
9/29/2020

* **Vision**: Our vision is to help connect locals in the Morgantown area to the many local restaurants of the town.
    * Our vision is to connect people in the Morgantown area to the many diverse restaurants and other eateries local to the area.
    * We will include a list of restaurants, as well as a map, to allow users to more easily find and connect to local restaurants
    * We will provide a mailbox to allow administrators on the site to send out announcements about new restaurants in the area, as well as deals and other announcements about events restaurants are holding.
    * We expect our product to revolutionize how people in Morgantown, especially new WVU students, search for and connect to restaurants in the local area.
    * Written by: Caleb Givens
* **Mission**:  Our plan for achieving our goals 
    * As a team we will work together to make decisions that will affect the project outcome and features.
    * We will meet using either Microsoft Teams or Discord, depending on what is most convenient at the time, and meetings will occur regularly 1-2 times per week on Tuesdays and Thursdays.
    * Additional meetings will be held throughout the week as needed. 
    * We will plan to complete our project in different phases, which will include planning, programming, testing/analysis, and retrospective.
    * While we will have established time slots for completing each phase, they will be adjusted as needed during the regular meetings
    * Any changes to the plan of the project will be communicated ASAP to all members of the group via instant messaging and through voice chat if at possible
    * Written by: Kollin Labowski
* **Success Criteria**: Our guide to success
    * Customers will be able to view a selection of restaurants and search through them to find restaurants that meet their desires.
    * Users will be connected to the Morgantown area by receiving notifications from local restaurants of events and deals, and restaurants will benefit because their messages will be able to reach a wider audience.
    * Our product will help decrease the amount of time users will have to spend seaching for local restaurants, because descriptions and reviews for several restaurants can all be found on one site, including links to each of the websites so users do not need to seach for them theirselves.
    * Our system will allow users to give feedback about the features so that the system can continuously be improved.
    * Written By: Isiah Phares


[Kanban Board](https://trello.com/b/iTm2PHUH/kanban-template)

## Milestone 2
**Parse Table**

**Potential Classes**      | **General Classification**    | **Decision** 
-------------------------- | ----------------------------- | ------------
 User Information Database | External User Storage Entity  | Accept 
 Website Information       | Informative Tool              | Accept 
 Feedback Database         | Store submitted feedback      | Deny  
 Search Engine             | Search Utility                | Accept 
 Mailbox                   | Display mail to users         | Accept 
 Mailer                    | Send mail to users            | Accept 
 Mail Database             | Stores announcements          | Accept 
 User Profile              | Allow user customization      | Accept
 Feedback Form             | Feedback Interface            | Accept 
 Restaurant Information    | Informative Tool              | Accept 
 Interface                 | Main page                     | Accept 
 
 Note: This table was changed to reflect the new design for the project


[CRC Cards](https://drive.google.com/drive/folders/15DeODdncCf0xyjrnx8pDSD5Snbk6l3dn?usp=sharing)

[Model](https://drive.google.com/file/d/1gnvfxYiahQE-6Nj5kYfjbq6RofF9amyN/view?usp=sharing)

## Milestone 3
[Architectural Diagrams](https://drive.google.com/drive/folders/1aufDgRJy3f4BRMJqZxazb-1kT8D_TVqj?usp=sharing)

## Milestone 4
**What went well in the Sprint?**
In this sprint, the team solidified the goals of the project and gained a more uniform, clear vision of where the project needs to go in future sprints. Every member of the group contributed to the project and was eager to introduce new ideas to the project. Each member completed their contribution to the project in a timely manner so that everything could be compiled together for presenting it. The group members all did a very good job of communicating so that no two members were performing the same work and that no specific jobs were left out by mistake. As a whole, the team was very cohesive and tackled each obstacle without any excessive difficulty.

**What could be improved?**
The biggest issue that came about during the first coding sprint was having a workspace that everyone could work in without causing other people issues. Since we hadn’t learned about the AWS service yet we had to each write our own portions of code and determine global variable names so that everyone's code would integrate together. Then each person uploaded their portion of code then one member of the team compiled the project into one file with each portion integrated into the final version of the sprint. In the next sprint we will integrate in AWS so that everyone can work on the project in real time and quickly see how their code interacts with each other.

**What will we commit to improve in the next Sprint?**
We will commit to improve the functionality by implementing more user friendly features such as logging in and having a profile. We will also improve and complete placing an order and checking out on the website. Our most important improvements will start and include integrating our code into AWS so that we can all work more efficiently and keep our work consistent. We plan to also focus on building the aesthetics of the website in order to attract consumers and keep a professional look. We would direct our attention from a grubhub knockoff to a more inclusive restaurant review and suggestion website for other students in the area! We’ll focus on having user suggestive implementations as well as an interactive map for a better UI directed towards attracting consumers. 

[Updated Kanban Board](https://trello.com/b/iTm2PHUH/kanban-template)

## Updated Project Design
**Note**
Changes to the original design were made. As of 12/8/2020, the above milestones have been updated to fit our new project design. Original design was to create a web application similar in design to GrubHub, with the ability for users to order food from various local restaurants and have it delivered to them. The modern implementation does not differ heavily from the original concept, however instead of allowing the user to order food directly from the website, the user will instead be directed to a summary of the restaurant they want to order from. This summary, which will include user reviews of restaurants, will also include a link to the restaurant's website, where they can then order food directly from the website. Additionally, two new features, an interactive map and a mailbox, have been added to the website as additional features for the user.
