wazuh_agent_setup="/usr/local/reticen8/scripts/wazuh/setup.php"
wazuh_agent_enable={% if not helpers.empty('Reticen8.WazuhAgent.general.enabled') %}"YES"{% else %}"NO"{% endif %}
