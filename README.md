# Friends and Hobbies

## Introduction

Welcome to Friends and Hobbies! This project allows users to manage their friends list and hobbies. Users can add, delete, and edit friend profiles, as well as choose hobbies for themselves and their friends.

## Features and Database Schema

Friends and Hobbies provides the following features:

- **Friend Management**: Users can create, delete, and edit friend profiles.
- **Hobby Selection**: Users can choose hobbies for themselves and their friends.
- **Database Schema**: The database schema consists of three main tables:
  - **Users**: Stores information about users.
  - **Friends**: Stores information about friends, including their relationship to the user.
  - **Hobbies**: Stores information about hobbies, which are associated with users and friends through a many-to-many relationship.

## User Flow Screenshots

Below are screenshots demonstrating the user flow of Friends and Hobbies:

1. **Home Page**:
   ![Home Page](/screenshots/home_page.png)

2. **Add Friend**:
   ![Add Friend](/screenshots/add_friend.png)

3. **Edit Friend**:
   ![Edit Friend](/screenshots/edit_friend.png)

4. **Choose Hobbies**:
   ![Choose Hobbies](/screenshots/choose_hobbies.png)

## Incomplete Assignment Explanation

Unfortunately, due to time constraints, the ability to delete hobbies was not implemented in this version of the project. However, it was intended to provide users with the option to remove hobbies from their profiles and their friends' profiles.

## Thoughts on Laravel and Additional Learnings

Laravel has been instrumental in developing Friends and Hobbies, providing a robust framework for building CRUD functionality and managing database relationships. To supplement my learning, I would like to explore advanced Laravel features such as authentication, authorization, and API development in future classes.
