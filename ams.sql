select a.id,a.user_id,c.username am,b.hunter hunter_id,d.username hunter_name from clients a 
        left outer join tmp.client202112 b on b.id=a.id 
        left outer join users c on c.id=a.user_id 
        left outer join users d on d.id=b.hunter ;

select a.id,a.user_id,c.username am,b.hunter hunter_id from clients a 
        left outer join tmp202112.client202112 b on b.id=a.id 
        left outer join users c on c.id=a.user_id where a.active="1" group by a.id,a.user_id,c.username,b.hunter;
        left outer join users d on d.id=b.hunter ;


select a.id,a.user_id,b.hunter hunter_id from clients a 
        left outer join tmp202112.client202112 b on b.id=a.id where active="1";
        left outer join users c on c.id=a.user_id group by a.id,a.user_id,c.username,b.hunter;
        left outer join users d on d.id=b.hunter ;


select a.id,a.user_id,c.username am,b.hunter hunter_id from clients a 
        left outer join tmp202112.client202112 b on b.id=a.id 
        left outer join users c on c.id=a.user_id
        left outer join users d on d.id=b.hunter  where a.active="1" group by a.id,a.user_id,c.username,b.hunter;



select a.id,a.user_id,c.username am,b.hunter hunter_id from clients a 
        left outer join tmp.client202112 b on b.id=a.id 
        left outer join users c on c.id=a.user_id
        left outer join users d on d.id=b.hunter  where a.active="1" group by a.id,a.user_id,c.username,b.hunter;


update client202112 set farmer=198 where farmer='akt';

update client202112 set hunter=198 where hunter='akt';

update client202112 set hunter=8 where hunter='amir';

update client202112 set farmer=8 where farmer='amir';

update client202112 set farmer=95 where farmer='andry';

update client202112 set hunter=95 where hunter='andry';

update client202112 set hunter=96 where hunter='dhita';

 update client202112 set farmer=96 where farmer='dhita';

update client202112 set farmer=52 where farmer='dwi';

update client202112 set hunter=52 where hunter='dwi';

update client202112 set hunter=54 where hunter='ratih';

update client202112 set farmer=54 where farmer='ratih';

update client202112 set farmer=14 where farmer='yudi';

update client202112 set hunter=14 where hunter='yudi';

update client202112 set farmer=9 where farmer='ketut';

update client202112 set hunter=9 where hunter='ketut';

update client202112 set hunter=113 where hunter='aris';

update client202112 set farmer=113 where farmer='aris';

update client202112 set farmer=62 where farmer='endy';

update client202112 set hunter=62 where hunter='endy';

update client202112 set hunter=150 where hunter='angga';

update client202112 set farmer=150 where farmer='angga';

update client202112 set farmer=161 where farmer='hendra';

update client202112 set hunter=161 where hunter='hendra';

update client202112 set hunter=160 where hunter='GANIES';

update client202112 set farmer=160 where farmer='GANIES';

update client202112 set farmer=98 where farmer='lucky';

update client202112 set hunter=98 where hunter='lucky';

update client202112 set hunter=178 where hunter='rohmah';

update client202112 set farmer=178 where farmer='rohmah';

update client202112 set farmer=196 where farmer='arifudin';

update client202112 set hunter=196 where hunter='arifudin';

update client202112 set hunter=197 where hunter='yanuar';

update client202112 set farmer=197 where farmer='yanuar';

update client202112 set farmer=45 where farmer='solikin';

update client202112 set hunter=45 where hunter='solikin';

update client202112 set hunter=46 where hunter='retno';

update client202112 set farmer=46 where farmer='retno';

update client202112 set farmer=146 where farmer='indri';

update client202112 set hunter=146 where hunter='indri';

update client202112 set hunter=132 where hunter='indra';

update client202112 set farmer=132 where farmer='indra';

update client202112 set farmer=112 where farmer='sandra';

update client202112 set hunter=112 where hunter='sandra';

update client202112 set hunter=50 where hunter='rezy';

update client202112 set farmer=50 where farmer='rezy';

update client202112 set farmer=6 where farmer='naning';

update client202112 set hunter=6 where hunter='naning';

update client202112 set hunter=83 where hunter='AYU';

update client202112 set hunter=84 where hunter='EKA';

update client202112 set farmer=84 where farmer='EKA';

update client202112 set farmer=83 where farmer='AYU';
