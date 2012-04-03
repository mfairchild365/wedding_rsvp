<h2>Report</h2>

<div id='content'>
    <table>
        <tr>
            <th>
            Total RSVPs
            </th>
            <th>
            Total attending Wedding
            </th>
             <th>
            Total attending Reception
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $context->total;?>
            </td>
            <td>
                <?php echo $context->wedding;?>
            </td>
            <td>
                <?php echo $context->reception;?>
            </td>
        </tr>
    </table>
    
    <table>
        <tr>
             <th>
                 Name
             </th>
             <th>
                 Wedding
             </th>
             <th>
                 Reception
             </th>
             <th>
                 Guest
             </th>
        </tr>
        <?php 
        foreach (Wedding_RSVP_RecordList::getAll() as $rsvp) {
        ?>
            <tr>
                <td>
                    <?php echo $rsvp->name;?>
                </td>
                <td>
                    <?php echo $rsvp->wedding;?>
                </td>
                <td>
                    <?php echo $rsvp->reception;?>
                </td>
                <td>
                    <?php echo $rsvp->guest;?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>