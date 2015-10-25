-- Table: books

-- DROP TABLE books;

CREATE TABLE books
(
  id serial NOT NULL,
  author character(50) NOT NULL,
  name character(100) NOT NULL,
  time_added timestamp without time zone,
  CONSTRAINT books_pkey PRIMARY KEY (id )
)
WITH (
  OIDS=FALSE
);

ALTER TABLE books
  OWNER TO postgres;

-- Index: "UNIQUE_AUTHOR_NAME"

-- DROP INDEX "UNIQUE_AUTHOR_NAME";

CREATE UNIQUE INDEX "UNIQUE_AUTHOR_NAME"
  ON books
  USING btree
  (author COLLATE pg_catalog."default" , name COLLATE pg_catalog."default" );

