{if $msgs->isInfo()}

    <h4>Informacje: </h4>
    <ul class="inf">
        {foreach  $msgs->getMessages() as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
        {/foreach}
    </ul>

{/if}
{if $msgs->isError()}
    <h4>Wystąpiły błędy: </h4>
    <ul class="err">
        {foreach  $msgs->getMessages() as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
        {/foreach}
    </ul>
{/if}