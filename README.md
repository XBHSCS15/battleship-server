# battleship-server
Server that will enable the multiplayer functionality of Battleship

*Only members of the Networking team should edit this repo. If you have any questions, contact @abyrne55*

## Usage Guide ##
This server has a HTTP `GET` and `POST` based API. It is a very simple front for a MySQL database. The database has only three columns:
 -   Game ID (the clients should keep track of this)
 -   Start Time (mostly for record keeping purposes)
 -   Message (This is the "cubbyhole" or mailbox that both clients will read from

### Testing Connectivity ###
This should be done before starting anything else. Make a `GET` request to

    https://battleship-server-abyrne55.c9.io/test.php

The server will reply `ready` if you're okay to proceeed. Anything else is an error.

### Starting A Game (Inserting) ###
Make a `GET` request to

    https://battleship-server-abyrne55.c9.io/insert.php
    
The server will reply with your new game ID. If an `HTTP 500` error is received, then we cannot connect to the database for some reason.

### Storing a Message (Putting) ###
Make a `POST` request to

    https://battleship-server-abyrne55.c9.io/message_put.php?id=[GAMEID]
    
Replace `[GAMEID]` with your actual Game ID (receieved from the insert page). If an `HTTP 500` error is received, then you probably specified an invalid Game ID. 

### Picking up a Message (Fetching) ###
Make a `GET` request to

    https://battleship-server-abyrne55.c9.io/message_fetch.php?id=[GAMEID]
    
Replace `[GAMEID]` with your actual Game ID (receieved from the insert page). The server will reply with the content of the message. If an `HTTP 404` error is received, then you specified an invalid Game ID. 