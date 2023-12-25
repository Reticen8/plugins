{% if not helpers.empty('Reticen8.DynDNS.general.enabled') and Reticen8.DynDNS.general.backend == 'ddclient' %}
ddclient_enable="YES"
ddclient_setup="/usr/local/reticen8/scripts/ddclient/setup.sh"
ddclient_flags="-daemon {{Reticen8.DynDNS.general.daemon_delay|default('300')}}"
{% else %}
ddclient_enable="NO"
{% endif %}
