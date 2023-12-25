{% if helpers.exists('Reticen8.proxy.general.enabled') and Reticen8.proxy.general.enabled|default("0") == "1" %}
squid_setup="/usr/local/reticen8/scripts/proxy/setup.sh"
squid_enable="YES"
{% else %}
squid_enable="NO"
{% endif %}
