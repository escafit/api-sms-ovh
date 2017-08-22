# PHP - API SMS OVH
* Lien du tutoriel d'OVH : [Envoyer des SMS avec l'API OVH en PHP](https://www.ovh.com/fr/g1639.envoyer_des_sms_avec_lapi_ovh_en_php)
* Lien permettant de générer les identifiants (tokens) : [Générer les clés API](https://api.ovh.com/createToken/index.cgi?GET=/sms&GET=/sms/%2a&PUT=/sms/%2a&DELETE=/sms/%2a&POST=/sms/%2a)
* Lien de la documentation OVH : [Documentation API SMS](https://docs.ovh.com/display/public/CRSMSFAX/API+SMS)
## LES DIFFÉRENTES FONCTIONS
| GET                    | PUT                          | POST                 | DELETE               |
|------------------------|------------------------------|----------------------|----------------------|
| Récupérer les services | Modifier l'état d'une valeur | Exécuter des actions | Supprimer un service |
## LES IDENTIFIANTS
1. Identifie votre application :
```
$applicationKey = "***";
```
2. Authentifie votre application :
```
$applicationSecret = "***";
```
3. Autorise l'application :
```
$consumer_key = "***";
```
## LES FONCTIONS
```
$content = (object) array(
	"charset"=> "UTF-8",
	"class"=> "phoneDisplay",
	"coding"=> "7bit",
	"message"=> "Hello world !",
	"noStopClause"=> true,
	"priority"=> "high",
	"receivers"=> [ "+336********" ],
	"senderForResponse"=> true,
	"validityPeriod"=> 2880
);
```
