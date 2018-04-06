Create table Categorie(
    id smallint unsigned not null auto_increment primary key,
    nom varchar(20),
    urlCategorie varchar(200)
)ENGINE=InnoDB;

Create table Article(
    id smallint unsigned not null auto_increment primary key,
    titre varchar(500),
    contenu text,
    photos varchar(500),
    dateSorti datetime,
    categorie smallint unsigned not null,
    articleUrl varchar(100),
    resumes varchar(400),
    foreign key (categorie) references Categorie(id)
)engine=innodb;

Create table Alaune(
    id smallint unsigned not null auto_increment primary key,
    article smallint unsigned,  
    photo varchar(100), 
    foreign key (article) references Article(id)
)ENGINE=InnoDB;

Create table BreakingNews(
    id smallint unsigned not null auto_increment primary key,
    article smallint unsigned,
    description varchar(500),
    foreign key (article) references Article(id)
)ENGINE=InnoDB;

Create or replace view ArticleCategorie as select Article.id,Article.titre,Article.contenu,Article.photos,Article.dateSorti,Categorie.nom as categorie,Article.articleUrl,Article.resumes,Article.categorie as categorieId from Article,Categorie where Article.categorie = Categorie.id order by Article.dateSorti desc;

Create or replace view ArticleAlaUne as select ArticleCategorie.*,Alaune.photo from ArticleCategorie,Alaune where Alaune.article=ArticleCategorie.id ;

Create or replace view AlauneArticle as select Alaune.id,Article.titre,Alaune.photo from Article,Alaune where Alaune.article=Article.id;

Create or replace view ArticleBreakingNews as select ArticleCategorie.* from ArticleCategorie,BreakingNews where BreakingNews.article=ArticleCategorie.id ;

Create or replace view BreakingNewsArticle as Select ArticleCategorie.*,BreakingNews.description from BreakingNews,ArticleCategorie where BreakingNews.article = ArticleCategorie.id ;

Insert into Categorie(nom) values
('Politique'),
('Divers'),
('Sport');

Insert into Article (titre,contenu,photos,dateSorti,categorie,articleUrl,resumes) values
('Nafinaritra ny Paka','Tena nafinaritra ny fety raha ny hevitr ity renim-pianakaviana iray ity : << Ho Anay manokana dia misy lanja lehibe aminay ny Paska @ maha kristianina anay ka dia andro lehibe tokoa izy io >>|Eo ihany koa ireo izay efa maika ny @ fitsangatsanganana rahampitso','photo.jpg',now(),2,'fetin-paka-2018-nafinaritra','Nafinaritra ny fetin ny paska t@ ankapobeny'),
('Nafinaritra ny Lundi de Paka','Tena nafinaritra ny fety raha ny hevitr ity renim-pianakaviana iray ity : << Ho Anay manokana dia misy lanja lehibe aminay ny Paska @ maha kristianina anay ka dia andro lehibe tokoa izy io >>|Eo ihany koa ireo izay efa maika ny @ fitsangatsanganana rahampitso','photo.jpg',now(),2,'fetin-lundidepaka-2018-nafinaritra','Nafinaritra ny fetin ny paska t@ ankapobeny');
