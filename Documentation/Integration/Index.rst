=================
Theme-Integration
=================

Sprachlabel anpassen
====================




Templates bzw. Felder anpassen
==============================
Um die Felder eines Formulars oder auch die E-Mailtemplates anzupassen, gehen Sie wie folgt vor.

.. tip::
    **Hinweis:**

    Dieses Beispiel bezieht sich auf das *Advanced Formular*.

Zuerst erstellen Sie in Ihrem Theme ein Verzeichnis ``Resources/Private/Extensions/ThemeBootstrapFormhandler/Templates/ContactAdvanced`` und kopieren Sie alle Template-Dateien des Formulars hinein.
Des Weiteren müssen Sie das *MasterTemplate.html* direkt in das *Templates*-Verzeichnis kopieren.

Anschließend müssen Sie über die THEMES-Erweiterung den Template-Rootpfad Ihres Formulars auf dieses Verzeichnis legen:

``EXT:theme_bootstrap_slate/Resources/Private/Extensions/ThemeBootstrapFormhandler/Templates/``

.. important::
    **Achtung:**

    Der Pfad muss ohne das *ContactAdvanced* angegeben werden, damit das *MasterTemplate* noch gefunden wird. Achten Sie auch auf das abschließende */*!

Nun können Sie nach belieben die Felder Ihres Formulars oder auch die Texte Ihrer E-Mails anpassen.



Sprachwerte der Formulare anpassen
==================================
Um die Sprachwerte eines Formulars anzupassen oder eine neue Sprache hinzuzufügen, gehen Sie wie folgt vor.

.. tip::
	**Hinweis:**

    Dieses Beispiel bezieht sich auf das *Advanced Formular*.

Zuerst erstellen Sie in Ihrem Theme ein Verzeichnis ``Resources/Private/Extensions/ThemeBootstrapFormhandler/Language`` und kopieren Sie entsprechende Sprachdatei des Formulars hinein - in unserem Fall die Datei ``ContactAdvanced.xml``.

Anschließend müssen Sie über die THEMES-Erweiterung den Language-Rootpfad Ihres Formulars auf die kopierte Datei legen:

``EXT:theme_bootstrap_slate/Resources/Private/Extensions/ThemeBootstrapFormhandler/Language/ContactAdvanced.xml``

Vergessen Sie nicht den System-Cache von TYPO3 zu leeren, andernfalls werden Ihre Labeländerungen nicht angezeigt.

.. tip::
	**Inspire to share:**

    Sie haben ein Formular in eine aktuell noch nicht vorhandene Sprache übersetzt?! Wir und auch andere User dieser Erweiterung würden uns freuen wenn Sie diese mit uns teilen würden.



CSS/LESS des Formulars anpassen
===============================
Zuerst erstellen Sie in Ihrem Theme ein Verzeichnis ``Resources/Private/Extensions/ThemeBootstrapFormhandler/Dyncss`` und erstellen eine Datei namens *import.less*.

Hierin nehmen Sie nun Ihre CSS-Anpassungen vor. Damit diese nun auch in Ihrem Theme verwendet werden, fügen Sie in der ``Resources/Private/Dyncss/import.less`` die folgende Zeile hinzu:

.. code-block:: less
    :linenos:
    
    @import "../Extensions/ThemeBootstrapFormhandler/Dyncss/import.less";



MathGuard-Captach integrieren
=============================
Um ein MathGuard-Captcha in Ihr Formular zu integrieren installieren Sie zuerst die ``mathguard`` Erweiterung in Ihrem TYPO3.
Anschließend müssen Sie die Templates des Formulars in Ihrem Theme ablegen.

Nun fügen Sie die folgende Section in Ihrem *Step1.html*-Template hinzu:

.. code-block:: typoscript
    :linenos:
    
    ###master_section-start###
		###master_spamprotection-mathguard###
	###master_section-end###



Weitere Pflichtfelder definieren
================================
Einfach im Plugin-Datensatz unter *Other Settings* -> *Mandatory fields* hinzufügen.