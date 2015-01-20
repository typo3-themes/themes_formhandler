================
Advanced Contact
================

Beschreibung
============
In diesem Formular gibt es ein Betreff-Feld, welches je nach Auswahl die Kontakt-E-Mail an einen anderen Adressaten schicken kann.
Darüberhinaus sollen diese Felder im Backend pflegbar sein.

Kann keine E-Mail anhand des Betreffs identifiziert werden, wird die E-Mail an den Standard-Empfänger(wie bei den anderen Formularen auch) gesendet.


Einrichtung im Backend
======================
Richten Sie zuerst einen Container ``Kontakt-Formular`` unter Ihrem *DomainStorage* ein.
Dieser soll nun im Folgenden FrontendUser beinhalten, welche für die Adressaten verwendet werden.
Aus diesem Grund wählen Sie in dern Seiten-Einstellungen ruhig *Use as Container* -> *Website Users* aus.

Erstellen Sie in diesem Container eine FrontendUser-Gruppe *Kontakt-Formular-Empfänger*.
Anschließend für jede 

... einen Benutzer mit Name und E-Mail

* **username:** Beliebig aber eindeutig
* **password:** Beliebig
* **usergroup:** *Kontakt-Formular-Empfänger*
* **Name:** Name des Auswahlfeldes
* **E-Mail:** E-Mailadresse des Adressaten



Das Feld Betreff wird automatisch validiert und ist ein Pflichtfeld.