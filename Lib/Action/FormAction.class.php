<?php

class FormAction extends Action{
    public function insert(){
        $Form = D('Form');
        if($Form->create()) {
            $result = $Form->add();
            if($result) {
                $this->success('�����ɹ���');
            }else{
                $this->error('д�����');
            }
        }else{
            $this->error($Form->getError());
        }
    }
	
	public function read($id = 3){
		$Form   =   M('Form');
		// ��ȡ����
		$data =   $Form->find($id);
		if($data) {
			$this->data =   $data;// ģ�������ֵ
		}else{
			$this->error('���ݴ���');
		}
		$this->display();
	}
	
	public function update(){
		$Form = D('Form');
		if($Form->create()){
			$result = $Form->save();
			if($result) {
                $this->success('�����ɹ���');
            }else{
                $this->error('д�����');
            }
        }else{
            $this->error($Form->getError());
        }
	}
	
	public function edit($id = 3){
		$Form   =   M('Form');
		$this->vo   =   $Form->find($id);
		$this->display();
	}
}