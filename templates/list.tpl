<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            {section loop=$posts name=i}
            <div class="post-preview">
                <a href="post.php?id={$posts[i].id}">
                    <h2 class="post-title">
                        {$posts[i].name}
                    </h2>
                    <h3 class="post-subtitle">
                        {$posts[i].theme}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>
            {/section}
            <!-- Pager -->
            <ul class="pager">
                {if $activePage==1}
                    <li class="previous">
                        <a href="">&larr;Older Posts </a>
                    </li>
                {else}
                    <li class="previous">
                        <a href="index.php?page={$activePage-1}">&larr;Older Posts </a>
                    </li>
                {/if}
                {if $activePage==$countPages}
                    <li class="next">
                        <a href="">Older Posts &rarr;</a>
                    </li>
                {else}
                    <li class="next">
                        <a href="index.php?page={$activePage+1}">Older Posts &rarr;</a>
                    </li>
                {/if}
            </ul>
        </div>
    </div>
</div>