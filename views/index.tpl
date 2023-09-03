{extends  'template/layout.tpl'}
{block 'title'}Welcome{/block}
{block 'content'}
    <article>
        <h1>Welcome</h1>
        <p>Nice to meet you {$name}!</p>
        <p>Your favorite foods are:</p>
        <ul>
            {foreach $foods as $food}
                <li>{$food}</li>
            {/foreach}
        </ul>
    </article>
{/block}