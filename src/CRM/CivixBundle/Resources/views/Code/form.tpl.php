{* HEADER *}

<div class="crm-submit-buttons">
{include file="CRM/common/formButtons.tpl" location="top"}
</div>

{* TEXT EXAMPLE -- Use {ts} for translation *}

{capture assign=formClassFile}<?php echo $namespace ?>/Form/<?php echo $formClassName ?>.php{/capture}
{capture assign=formTplFile}templates/<?php echo $namespace ?>/Form/<?php echo $formClassName ?>.tpl{/capture}
<h3>{ts 1=$formClassFile 2=$formTplFile}This form is generated by %1 and %2.{/ts}</h3>

{* FIELD EXAMPLE: OPTION 1 (AUTOMATIC LAYOUT)

{foreach from=$fields item=field}
  {if $field.label}
    <div class="crm-section">
      <div class="label">{$field.label}</div>
      <div class="content">{$field.html}</div>
      <div class="clear"></div>
    </div>
  {/if}
{/foreach}

{* FIELD EXAMPLE: OPTION 2 (MANUAL LAYOUT) *}

  <div>
    <span>{$form.favorite_color.label}</span>
    <span>{$form.favorite_color.html}</span>
  </div>

{* FOOTER *}
<div class="crm-submit-buttons">
{include file="CRM/common/formButtons.tpl" location="bottom"}
</div>
