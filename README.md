

- Class:			DavcneBlagajne.class.php
- Author: 		Matej Posinković, matej.posinkovic at gmail.com
- Description:		PHP class handles fiscal verification of invoices issued in Slovenia.
- Version:		1.0
- Date:			December 2015
- Available at:		https://github.com/matejpos/PHP-davcne-blagajne


WARNING
==

THE SOFTWARE IS AVAILABLE “AS IS” AND THE USAGE OF SOFTWARE IS ON YOUR OWN RISK. AUTHOR IS BY NO MEANS LIABLE TO ANY POSSIBLE DAMAGE CAUSED BY SOFTWARE USAGE.


INTRODUCTION
==

Script is made for business that run only on websites (e.g. credit cards payments) and consequently:
- business premise is only one (a website) and has value 1
- electronic device is only one (a website) and has value 1


LICENCE
==

The terms of usage and rules about copying are listed in the GNU General Public License (http://www.gnu.org/licenses/gpl-3.0.en.html).


REQUIREMENTS
==

Not sure what are the minimum requirements, but for sure, script works on:

- PHP		5.6.9
- curl		7.38
- GD		2.1.1


LIBRARY DEPENDENCIES
==

Script relies on:
- XML signing lib available at:			https://github.com/robrichards/xmlseclibs
- QR code generation lib available at:		http://phpqrcode.sourceforge.net/


CERTIFICATE CREATION
==

- cer to pem:		openssl x509 -inform der -in sitest-ca.cer -out fursserver.pem
- p12 to pem:		openssl pkcs12 -in ****.p12 -out mojcertifikat.pem -password pass:*****


INSTALLATION
==

In order to start using script, customize: __construct(), setTestMode(). Customisation of invoice msg is done in createInvoiceMsg()


UPGRADES
==

Script covers basic functionalities. All additional functionalities can be straightforwardly added. In case you’ll be upgrading script with new functionalities (e.g. invoice storno), please, make your script public.

