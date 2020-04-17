/*
	SQL - Structured Query Language
		- SQL is domain-specific language, used in programming and design for managing data that is held in a RDBMS

	DATA TYPES
		- description, or the types of the data that goes in our table
		
		Music Store
		   Artists
		| id | name |

		* What type of data is appropriate for the ID / Name field?
		* What data are we expecting to save in these fields?

		Artists
		| id (integer/numeric) | name (string) |

		Albums
		| id (integer/numeric) | name(string) | year (date)


	SQL DATA TYPES
		Strings:

		CHAR(s) - fixed length string w/ sizes up to 255 (bytes)
		VARCHAR(s) - variable length string w/ sizes up to 65, 535 (bytes)
		TEXT - variable length string w/ sizes to 65, 535 (bytes)

		The way they differ is how they are stored in the database.
		Ideally, CHAR for 1-2words only, VARCHAR for 3-10 words, TEXT for paragraphs


		Integer/Numeric:

		TINYINT = min of -128 values, max of 127 values
		SMALLINT = min of -32,768 values, max of 32, 767
		INT = min of -2,147,483,648 values, max of 2,147,483,647
			ex. Primary Key, Foreign Key
		BIGINT = min of -9,223,372,036,854,755,808 values, max of 9,223,372,036,854,755,807
		DECIMAL(M,D) = M stands if the total number of digits and D is the number of digits after the decimal point
			ex. DECIMAL (4,2) = 1,450.75 


		DATE and TIME
		DATE = HH:MM:SS
		DATETIME/TIMESTAMP = YYYY-MM-DD HH:MM:SS

		*DATA DEFINITION LANGUAGE
		CREATE DATABASE
		CREATE TABLE
			-DATA TYPES
			-FOREIGN KEYS, CONSTRAINT
		ALTER TABLE
			-ADD COLUMN
			-DROP COLUMN
			-RENAME COLUMN
		DROP TABLE
		RENAME TABLE

		to rename a column in a table
		ALTER TABLE <tablename> CHANGE <columnname> <newcolumnname> <dataype(length)>
		ex. ALTER TABLE albums CHANGE name album_name varchar(255);

		to add a column in a table
		ALTER TABLE <tablename> ADD COLUMN <columnname> <datatype>(length)>;
		ex. ALTER TABLE albums ADD COLUMN description text;

		to drop a column in a table
		ALTER TABLE <tablename> DROP COLUMN <columnname>;
		ex. ALTER TABLE albums DROP COLUMN description;
		
		to rename a table
		ALTER TABLE <tablename> RENAME TO <tablename>
		ex. ALTER TABLE song_playlist RENAME TO songs_playlists;

		to drop a table
		DROP TABLE <tablename>
		ex. DROP TABLE songs_playlists

*/