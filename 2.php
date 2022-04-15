<?php
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$n = array(
  'cctv1' => '0001', //CCTV-1
  'cctv1hd' => '0127', //CCTV-1����
  'cctv2' => '0002', //CCTV-2
  'cctv2hd' => '0244', //CCTV-2����
  'cctv3' => '0259', //CCTV-3
  'cctv3hd' => '0245', //CCTV-3����
  'cctv4' => '0005', //CCTV-4
  'cctv4hd' => '0316', //CCTV-4����
  'cctv5' => '0260', //CCTV-5
  'cctv5hd' => '0246', //CCTV-5����
  'cctv5p' => '0128', //CCTV-5+����
  'cctv6' => '0261', //CCTV-6
  'cctv6hd' => '0247', //CCTV-6����
  'cctv7' => '0009', //CCTV-7
  'cctv7hd' => '0248', //CCTV-7����
  'cctv8' => '0262', //CCTV-8
  'cctv8hd' => '0249', //CCTV-8����
  'cctv9' => '0014', //CCTV-9
  'cctv9hd' => '0250', //CCTV-9����
  'cctv9hd2' => '0478', //CCTV-9����2
  'cctv10' => '0015', //CCTV-10
  'cctv10hd' => '0251', //CCTV-10����
  'cctv11' => '0016', //CCTV-11
  'cctv11hd' => '0328', //CCTV-11����
  'cctv12' => '0017', //CCTV-12
  'cctv12hd' => '0252', //CCTV-12����
  'cctv13' => '0126', //CCTV-13
  'cctv13hd' => '0502', //CCTV-13����
  'cctv14' => '0085', //CCTV-14
  'cctv14hd' => '0253', //CCTV-14����
  'cctv15' => '0086', //CCTV-15
  'cctv15hd' => '0329', //CCTV-15����
  'cctv16hd' => '0388', //CCTV-16����
  'cctv16_4k' => '0506', //CCTV16_4K������
  'cctv17' => '0327', //CCTV-17
  'cctv17hd' => '0326', //CCTV-17����

  'cgtn' => '0021', //CGTN
  'cgtn2' => '0365', //CGTN2
  'cgtna' => '0369', //CGTN ��������
  'cgtne' => '0367', //CGTN ��������
  'cgtnf' => '0368', //CGTN ����
  'cgtnr' => '0370', //CGTN ����

  'cetv1' => '0243', //CETV1
  'cetv1hd' => '0302', //CETV1����
  'cetv2' => '5251', //CETV-2
  'cetv4' => '5252', //CETV-4

  'chcdzdy' => '0324', //CHC������Ӱ����
  'chcgqdy' => '0325', //CHC�����Ӱ
  'chcjtyy' => '0323', //CHC��ͥӰԺ����

  'bjws' => '0026', //��������
  'bjwshd' => '0129', //�������Ӹ���
  'dfws' => '0011', //��������
  'dfwshd' => '0242', //�������Ӹ���
  'tjws' => '0072', //�������
  'tjwshd' => '0136', //������Ӹ���
  'cqws' => '0012', //��������
  'hljws' => '0042', //����������
  'hljwshd' => '0131', //���������Ӹ���
  'jlws' => '0046', //��������
  'lnws' => '0057', //��������
  'lnwshd' => '0255', //�������Ӹ���
  'nmws' => '0060', //���ɹ�����
  'nxws' => '0061', //��������
  'gsws' => '0034', //��������
  'qhws' => '0063', //�ຣ����
  'sxws' => '0066', //��������
  'hbws' => '0040', //�ӱ�����
  'hbwshd' => '0317', //�ӱ����Ӹ���
  'sxiws' => '0065', //ɽ������
  'sdws' => '0064', //ɽ������
  'sdwshd' => '0254', //ɽ�����Ӹ���
  'ahws' => '0024', //��������
  'ahwshd' => '0256', //�������Ӹ���
  'hnws' => '0041', //��������
  'hubws' => '0043', //��������
  'hubwshd' => '0135', //�������Ӹ���
  'hunws' => '0008', //��������
  'hunwshd' => '0130', //�������Ӹ���
  'jxws' => '0049', //��������
  'jsws' => '0048', //��������
  'jswshd' => '0133', //�������Ӹ���
  'zjws' => '0013', //�㽭����
  'zjwshd' => '0134', //�㽭���Ӹ���
  'dnws' => '0029', //��������
  'dnwshd' => '0588', //�������Ӹ���
  'xmws' => '0159', //��������
  'gdws' => '0036', //�㶫����
  'gdwshd' => '0137', //�㶫���Ӹ���
  'szws' => '0004', //��������
  'szwshd' => '0132', //�������Ӹ���
  'gxws' => '0037', //��������
  'ynws' => '0082', //��������
  'gzws' => '0038', //��������
  'gzwshd' => '0318', //�������Ӹ���
  'scws' => '0071', //�Ĵ�����
  'kbws' => '0331', //�������Ӳ���
  'xjws' => '0079', //�½�����
  'btws' => '0280', //��������
  'xzws' => '0076', //��������
  'hinws' => '0059', //��������
  'ssws' => '0589', //��ɳ����

  'kkse' => '0051', //�����ٶ�

  'tyss' => '0590', //�������¸���

  'xdm' => '0321', //�¶���
  'wlqp' => '0319', //��������
  
  'sdjy' => '0304', //ɽ������
  
  'jyjs' => '0303', //��ӥ��ʵ����
  'jykt' => '0050', //��ӥ��ͨ
  'xfpy' => '0320', //�ȷ�ƹ��

  'cftx' => '0148', //�Ƹ�����

  'jjkt' => '0087', //�μѿ�ͨ
);

header('location:'.'http://live.aishang.ctlcdn.com/0000011024'.$n[$id].'_1/playlist.m3u8?CONTENTID=0000011024'.$n[$id].'_1&AUTHINFO=FABqh274XDn8fkurD5614t%2B1RvYajgx%2Ba3PxUJe1SMO4OjrtFitM6ZQbSJEFffaD35hOAhZdTXOrK0W8QvBRom%2BXaXZYzB%2FQfYjeYzGgKhP%2Fdo%2BXpr4quVxlkA%2BubKvbU1XwJFRgrbX%2BnTs60JauQUrav8kLj%2FPH8LxkDFpzvkq75UfeY%2FVNDZygRZLw4j%2BXtwhj%2FIuXf1hJAU0X%2BheT7g%3D%3D&USERTOKEN=eHKuwve%2F35NVIR5qsO5XsuB0O2BhR0KR');
?>