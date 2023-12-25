{% if helpers.exists('Reticen8.ZabbixAgent.settings.main.enabled') and Reticen8.ZabbixAgent.settings.main.enabled|default("0") == "1" %}
zabbix_agentd_setup="/usr/local/reticen8/scripts/Reticen8/ZabbixAgent/setup.sh"
zabbix_agentd_config="/usr/local/etc/zabbix_agentd.conf"
zabbix_agentd_enable="YES"
{% else %}
zabbix_agentd_enable="NO"
{% endif %}
