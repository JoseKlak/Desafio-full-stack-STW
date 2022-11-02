use desafiostw;

create table ingredientes (
    id_ingredientes int auto_increment primary key,
    descricao VARCHAR(100) not null
);

create table receitas (
    id_receitas int auto_increment primary key,
    descricao VARCHAR(100) not null
);

create table receitas_ingredientes (
    id int auto_increment primary key,
    cod_receitas int,
    cod_ingredientes int,
    qntKG int,
    Foreign Key (cod_receitas) REFERENCES receitas(id_receitas),
    Foreign Key (cod_ingredientes) REFERENCES ingredientes(id_ingredientes)
);

INSERT INTO ingredientes (descricao) VALUES ("milho"), ("farinha"), ("premix");
