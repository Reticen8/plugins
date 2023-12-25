{% if not helpers.empty('Reticen8.Stunnel.general.enabled') and
      not helpers.empty('Reticen8.Stunnel.general.enable_ident_server') %}
identd_stunnel_enable="YES"
{% else %}
identd_stunnel_enable="NO"
{% endif %}
