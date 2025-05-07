{extends file="main.tpl"}
{block name=main}
    <form method="post" action="{$conf->action_url}login">
        <div class="row gtr-uniform gtr-50">
            <div class="col-9 col-8-xsmall">

                <input type="text" name="login" id="id_login" placeholder="Login"/></div>
            <div class="col-9 col-8-xsmall">
                <input type="password" name="pass" id="id_pass" placeholder="Password" /></div>
            <div class="col-4 col-8-xsmall"><input type="submit" value="Zaloguj"  class="fit primary" /></div>
        </div>
    </form>
    {include file='messages.tpl'}
{/block}