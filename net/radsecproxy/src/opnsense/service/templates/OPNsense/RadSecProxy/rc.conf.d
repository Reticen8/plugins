{% if not helpers.empty('Reticen8.radsecproxy.general.enabled') %}
radsecproxy_enable="YES"
radsecproxy_user="root"
radsecproxy_group="wheel"
radsecproxy_setup="/usr/local/reticen8/scripts/Reticen8/RadSecProxy/setup.sh"
{% else %}
radsecproxy_enable="NO"
{% endif %}
