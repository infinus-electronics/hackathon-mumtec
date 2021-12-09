<p align="center"><img src="https://github.com/woonyee28/argon-dashboard-laravel/blob/master/ASSSSS.png" width="400"></p>

## **Inspiration:**

Scattered to-do list, endless deadlines, vague memory on previous lessons & irritating homework problems - these are the issues faced by students nowadays, which decrease their learning performance in school


## **What it does:**

To tackle these problems, we came up with an innovative idea. Introducing ASS, a web app that integrates some of the key features that students are desperate for, such as the famous Kanban board which provides a visual process management system which aids decision-making, a well-designed calendar that displays upcoming events to ensure you never miss a beat. There is also a flashcard feature that aids your learning process, by implementing spaced-repetition and bite-sized learning techniques to ensure that learning never stops. Also, a chatbot function is a must-have for all students having issues with homework, as we know that it might take decades to get a reply from your teachers.

### **Details of Features:**

#### **1. Login**

##### **Background**



* Laravel
* Argon Theme
* Bootstrap

##### **Long Term Goal**



* Look into how Laravel handles users so everyone gets served the right notes, calendar etc 
* Design a database structure that will play nice with this 




#### **2. ANKI**

##### **Background**



* Contains 1 Fact
* Contains 1 Question
* Selected from a repository of facts and questions

    *The idea is for the user to either use ready made flashcards/notes or make these flashcards as they go along studying

    *Public repository containing these facts can be set up and shared between students 

    *The underlying code will pick facts and questions randomly

    *It takes into account when was the last time the user was shown this fact, and older stuff will be given a higher weight   

    *Spaced repetition



##### **Short Term Goal**



* Retrieval from database
* Random note selection

##### **Long Term Goal**



* Older notes get greater weight for repetition 

#### **3. Kanban**

##### **Background**



* Written in JS
* Notes stored in database
* Eventually will implement Quill editor for more powerful note-taking capability
* The idea behind the Kanban is it is a super duper flexible and customisable way of implementing a centralised to do list to manage tasks, and in some ways it provides a little bit of gamification to keep motivation up.

##### **Short Term Goals**



* Text note storage and retrieval from database
* Better editor 

##### **Long Term Goals**



* Support for attachments

    >Images


    >Audio


    >Other misc attachments

* Reminders  

#### **4.Calendar**

##### **Background**



* Displays automatically scraped deadlines
* User will also eventually have the option to add their own events
* Reminders 

 

#####    **Short Term Goals**



* Implement event addition 

    **         **


##### **Long Term Goals**



* Automatic scraping
* Reminders

#### **5.Chatbot**

##### **Background**



* Powered by a buggy version of BotMan, has php version incompatibility issues pending investigation (potentially to do with differences in php7 and 8; it is a known issue so yeah)
* Will eventually run a ML algorithm to answer questions**     **

#####   **Short Term Goals**



* Fix php bug so that pre-programmed responses work
* iframe's css consistency 

#####   **Long Term Goals**



* ML answering system



## **Built With:**

App Link: 

[http://ec2-13-213-63-235.ap-southeast-1.compute.amazonaws.com/](http://ec2-13-213-63-235.ap-southeast-1.compute.amazonaws.com/)

Web Service: Amazon EC2 

Instance type: t2.micro 

Database: Amazon RDS 

Engine: MySQL


## **Challenges we ran into:**

1. AWS Database was not accessible from localhost, but worked well on the server. Hence, we spent hours reading AWS documentation and eventually created a new security group to solve this.

2. The iframe in chatbot is not working due to extra "public" word in the url. We tackled the problem by changing the root directory.

3. Template is not fully up to date, and some of the routes are wrongly connected. Hence, we basically had to reverse engineer everything and write a lot of stuff from scratch. That was difficult since it's the first time we are working with Blade.

4. Getting the javascript for the kanban page proved to be challenging, due to complete lack of prior experience and several differences between scripts from jsdelivr and Cloudflare.

## **What is next for ASS:**

Short-term goal: 



* To alert students on deadlines periodically
* Allow students to access timetable conveniently
* Simplify campus navigation 

Long-term goal:



* Integrate academic features that help students improve their study efficacy in a platform
* Implement worldwide, expand our target users - high school students 
