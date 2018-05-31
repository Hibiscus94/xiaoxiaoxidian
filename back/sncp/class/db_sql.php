<?php
class mysqlquery
{
	var $sql;//sql���ִ�н��
	var $query;//sql���
	var $num;//���ؼ�¼��
	var $r;//��������
	var $id;//�������ݿ�id��
    //ִ��mysqli_query()���
	function query($query)
	{
	    global $link;
		$this->sql=mysqli_query($link,$query) or die(mysqli_error()."<br>".$query);
		return $this->sql;
	}
	//ִ��mysqli_query()���2
	function query1($query)
	{
        global $link;
		$this->sql=mysqli_query($link,$query);
		return $this->sql;
	}
	//ִ��mysqli_fetch_array()
	function fetch($sql)//�˷����Ĳ�����$sql����sql���ִ�н��
	{
		$this->r=mysqli_fetch_array($sql);
		return $this->r;
	}
	//ִ��fetchone(mysqli_fetch_array())
	//�˷�����fetch()��������:1���˷����Ĳ�����$query����sql��� 
	//2���˷�������while(),for()���ݿ�ָ�벻���Զ����ƣ���fetch()�����Զ����ơ�
	function fetch1($query)
	{
		$this->sql=$this->query($query);
		$this->r=mysqli_fetch_array($this->sql);
		return $this->r;
	}
	//ִ��mysqli_num_rows()
	function num($query)//����Ĳ�����$query����sql���
	{
		$this->sql=$this->query($query);
		$this->num=mysqli_num_rows($this->sql);
		return $this->num;
	}
	//ִ��numone(mysqli_num_rows())
	//�˷�����num()�������ǣ�1���˷����Ĳ�����$sql����sql����ִ�н����
	function num1($sql)
	{
		$this->num=mysqli_num_rows($sql);
		return $this->num;
	}
	//ִ��numone(mysqli_num_rows())
	//ͳ�Ƽ�¼��
	function gettotal($query)
	{
		$this->r=$this->fetch1($query);
		return $this->r['total'];
	}
	//ִ��free(mysqli_result_free())
	//�˷����Ĳ�����$sql����sql����ִ�н����ֻ�����õ�mysqli_fetch_array���������
	function free($sql)
	{
		mysqli_free_result($sql);
	}
	//ִ��seek(mysqli_data_seek())
	//�˷����Ĳ�����$sql����sql����ִ�н��,$pitΪִ��ָ���ƫ����
	function seek($sql,$pit)
	{
		mysqli_data_seek($sql,$pit);
	}
	//ִ��id(mysqli_insert_id())
	function lastid()//ȡ�����һ��ִ��mysql���ݿ�id��
	{
        global $link;
		$this->id=mysqli_insert_id($link);
		return $this->id;
	}
}
?>