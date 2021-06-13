<style>
#content {
    padding-bottom: 500px;
}
</style>
<h1 class="mt-4">Table Groups</h1>
<div class="card mb-4">
    <div class="card-header">
        <strong><a href="admin.php?mod=group&act=insert"><i class="fas fa-plus-circle"></i> </a>
            Add Groups
            </a></strong>
        
    </div>
    <div class="card-body">

        <table id="datatablesSimple">

            <thead>
                <tr class="title">
                    <th>Mã nhóm</th>
                    <th>Tên nhóm</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <?php
    foreach ($ret as $row) {
        echo "<tr><td>";
        echo $row['GroupID']."</td><td>";
        echo $row['GroupName']."</td><td>";
        echo "<a href=\"javascript:confirmDeleteGroup('admin.php?mod=group&act=delete&id=$row[GroupID]')\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
        echo "<a href=\"admin.php?mod=group&act=edit&id=$row[GroupID]\"><img src=\"Images/Edit.gif\" /></a>";
        echo "</td></tr>";
    }
    ?>
        </table>

    </div>
</div>
<script>
$(document).ready(function() {
    $('.container-fluid').remove();
});
</script>
<script>
function confirmDeleteGroup(delUrl) {
  if (confirm("Bạn có chắc chắn muốn xóa?")) {
   document.location = delUrl;
  }
}
</script>