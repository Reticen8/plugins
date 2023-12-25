{% if not helpers.empty('Reticen8.DynDNS.general.enabled') and Reticen8.DynDNS.general.backend == 'reticen8' %}
ddclient_opn_enable="YES"
ddclient_opn_setup="/usr/local/reticen8/scripts/ddclient/setup.sh"
{% else %}
ddclient_opn_enable="NO"
{% endif %}
