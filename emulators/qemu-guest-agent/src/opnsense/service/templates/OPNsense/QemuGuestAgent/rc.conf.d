{# Default setting is enabled, so that no GUI interaction is required. #}
{% if not (helpers.exists('Reticen8.QemuGuestAgent.general.LogDebug')) or Reticen8.QemuGuestAgent.general.Enabled|default("0") != "0" %}
{%   set optional_flags = [] %}
{%   do optional_flags.append('-d -l /var/log/qemu-ga.log') %}
{%   if helpers.exists('Reticen8.QemuGuestAgent.general.LogDebug') and Reticen8.QemuGuestAgent.general.LogDebug|default("0") == "1" %}
{%     do optional_flags.append('-v') %}
{%   endif %}
{%   if helpers.exists('Reticen8.QemuGuestAgent.general.DisabledRPCs') and not helpers.empty('Reticen8.QemuGuestAgent.general.DisabledRPCs') %}
{%     do optional_flags.append('--blacklist=' ~ Reticen8.QemuGuestAgent.general.DisabledRPCs) %}
{%   endif %}
qemu_guest_agent_setup="/usr/local/reticen8/scripts/Reticen8/QemuGuestAgent/setup.sh"
qemu_guest_agent_enable="YES"
qemu_guest_agent_flags="{{optional_flags|join(' ')}}"
{% else %}
qemu_guest_agent_enable="NO"
{% endif %}
