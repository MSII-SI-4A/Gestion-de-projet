# Gestion de projet

__David Le Manach__

## Dfinitions

### Projets

```
$projet.debut = new Date();
$projet.fin = new Date() +2months;
$projet.inique = true;
$projets.clients = [];

/**
 * Dmarage
*/
$projet.mandat = { // Justification du projet
	pourquoi : Business cases, // [Client, Fournisseur]
	Pourqui : le sponsor
};

$projet.parties = [ // Parties prenantes
	{
		Name: "Client",
		Pouvoir: 1,
		Intert: 1
	},
	{
		Name: "Secrtaire",
		Pouvoir: 1,
		Intert: 0
	},
	{
		Name: "Utilisateur",
		Pouvoir: 0,
		Intert: 1
	},
	// ...
];

/**
 * Planification
*/
$projet.plan = [// Plan de management
	{
		name : "Activit",
		description: "Avis d'un expert dans le domaine",
		taf: [ // WBS : dcomposition des tches
		],
		ordre: 1,
		ressources: [],
		dure: 20min //Optimiste, pessimiste, raliste, fnant
	}
];

$projet.besoins = [// Recueillir les exigences
	//...
	//Pensser aux lments obvious, e.g. pain dans un repas
];

$projet.contenu = [// Rponses au besoins
	//...
	//Pas necessairement 100% des besoins
];

$projet.taches = [
	{
		name : "Tche 1",
		description: "",
		debut: new Date() +1Day,
		fin: debut + 1hours
	}
];

$projet.couts = [ //Estimation!!
	{
		name : "Cot 1",
		valeur: 1000
	}
];

$projet.budget = SUM($projet.couts) + marge projet + provision sur risques + marge entreprise;

$projet.risques = [
	{
		probabilit: 0.25,
		impact: 8000
	},
	// ...
];

/**
 *Excution
*/
$projet.approvisionner();

$projet.communiquer(); //80% de la gestion de projet

$projet.manager(); //Diriger l'xcution

$projet.createEquipe(); //Crer l'quipe

$projet.managerLEquipe(); //dvelopper l'quipe

/**
 * Cloture
*/

$projet.retourDExperience = [
	// ...
];

$projet.approvisionnements.close();
```

### Oprations

Ce sont des actions qui n'ont pas de date de fin dfinis (TMA, service client, synchronisation data ...).

```
(operation instanceOf Projet) === false
(operation.fin is undefined) === true
```

### Contraintes

```
contraintes.components = ["Primtre", "Dlai", "Cot"];
contraintes.components.add("Qualit", "Ressources", "Risques");
Object.observe(contraintes.components);
```
	
### Chef de projet
	
```
($projectManager instanceOf Leader) === true;

$projectManager.projects.add($project);

$projectManager.observe($projectManager.projects, { //Surveillance
	travail: "acancement",
	dlais: "timming",
	contenu: "Analyse des dvialtions",
	qualit: "Echantillonnage",
	changements: "impacts"
});

$Savoir = [Formation, Etudes];
$Savoir-tre = [Communiquer, Ngocier, Influence, Education, Qualits personnelles, Adaptabilit];
$Savoir-faire = [Mthodes, Exprience, BSP]; //BSP : Bon Sens Pratique

$Performant = $Savoir.intersect($Savoir-faire);
$Connaissant = $Savoir.intersect($Savoir-tre);
$Excutant = $Savoir-faire.intersect($Savoir-tre);

$projectManager.knowledges = [
	$Savoir,
	$Savoir-tre,
	$Savoir-faire,
];

$projectManager.should({
	observer: true,
	apprendre: true,
	partager: true
});
```

## Inteligence Emotionnelle

__savoir tre__

### Definitions

_L'inteligence emotionnelle_ est la capacit pour un individu  identifier, accder et contrler ses motions et celles des autres. Elle est reconnue comme un facteur cl dans la prise de dcision. Il existe deux formes d'inteligence, l'inteligence rationelle (QI : Quotient intellectuel) et l'inteligence motionnelle (QE : Quotient emotionnel).

### L'amliorer

 - __L'estime de soi__ : c'est le sentiment que vous avez  l'gard de vous-mme,
	- La mannire dont vous vous percevez donne le "la" aux autres,
	- Prendre conscience de sa valeur (expertise, projets, contacts...),
	- Bien choisir sa tenue.
 - __Le sentiment de scurit__ : Vhiculer la confiance,
	- Ne pas, craindre le jugement, de mal faire/dire,
	- Sortir de la zone de confort (repousser les limites virtuelles).
 - __Dtente corporelle__ : Limiter les signaux de stress perus par les autres.
 - __L'empathie__ : Identifier les motions des autres,
	- Ecoute active (mots + gestuelle) + reformulation + intonnation
 - __Le charisme__ : Fait gagner du temps.
 
## Risques

C'est un aspect invitable et incertain de tout projet qui afecte la ralisaion des objectifs. Exemple: 

 - Mto,
 - Changement de primtre...

le risque peut avoir aussi un impact positif.
 
```
$risque = {
	probability: 0.5,
	impact: 1 // -1 menace, 1 opportunit,
	origin: "Source du risque",
	event: "Dans une condition particulire",
	effect: "Il se passe tel chose"
}
```

### Identification

 - Se baser sur les leons apprises,
 - Benchmark,
 - Jugement d'expert (interviews)
 - BrainStorming
 
## Certifications

### PMI

```
$PMI.CAPM = {
	possible: ($person.experience.duration >= 1500 hours || $person.formation.projectManagement.CAPM.duration >= 23 hours) && $person.education.highSchool == true,
	questions: 200,
	duration: 3 hours,
	required: "PMBoK",
	price: 300$
}
```

### Prince2

```
$Prince2 = {
	foundation: {},
	Practitionner: {}
}
```

### Scrum

```
$Scrum = {
	CertifiedSrcumMaster: {
		duration: 3 days,
		org: ScrumAliance
	},
	ProfessionnalScrumMaster: {
		org: ScrumDotOrg,
		price: 80$,
		questions: 60,
		ratioNedded: 0.7
	}
}
```
