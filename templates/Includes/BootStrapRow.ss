<section class="$EvenOdd $CSSClass">
        <div class="row">
            <% loop $BootStrapBlocks %>
                <div class="$BootStrapColumnClass $CSSClass $ClassName">$FormattedBlock</div>
            <% end_loop %>
        </div>
</section>