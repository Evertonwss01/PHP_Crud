create table funcionario(
id_funcionario int auto_increment primary key,
nome_funcionario varchar(45),
rg_funcionario varchar(20),
email varchar(30),
senha varchar(30),
idade int,
sexo varchar(12)
);

use SistemaPhp;
select * from funcionario;

alter table funcionario add senha varchar(30) after email;

/*Query utilizada na validação do Usuario se existia ou não no Banco*/
/*SELECT * FROM funcionario WHERE email = 'junior.melo@gmail.com' AND senha = 'geraldinho
'
Usuario text
      email: junior.melo@gmail.com
      senha: geraldinho
