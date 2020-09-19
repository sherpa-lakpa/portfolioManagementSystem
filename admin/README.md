## PHP Easy Dashboard Framework V1.0
 +--^----------,--------,-----,--------^-,
 | |||||||||   `--------'     |          O
 `+---------------------------^----------|
   `\_,---------,---------,--------------'
     / XXXXXX /'|       /'
    / XXXXXX /  `\    /'
   / XXXXXX /`-------'
  / XXXXXX /
 / XXXXXX /
(________(                
 `------'

###Options:
--help 			Displays this help message
--delete 		Deletes the component

###Usage:
php shoot component1
- Creates new component with name as component1

php shoot student fname:string,lname:string,roll:int,address:string
- Creates new component with name as student and creates Table
-----------------------------
|id|fname|lname|roll|address|
-----------------------------
int - represents integer and provides default range.
string - represents varchar(255)

php shoot component1 --delete
- Delete component with name as component1

###Created with ♥  by Lakpa Sherpa. Visit: [www.slakpa.com.np](www.slakpa.com.np)
