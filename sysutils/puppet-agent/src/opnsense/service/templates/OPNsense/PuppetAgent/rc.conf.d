{% if helpers.exists('Reticen8.puppetagent.general') and Reticen8.puppetagent.general.Enabled|default("0") == "1" %}
puppet_enable="YES"
{% else %}
puppet_enable="NO"
{% endif %}
