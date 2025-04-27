<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Hiroshi Takahashi',
            'username' => 'hiroshithk',
            'email' => 'hiroshi.takahashi@techmail.com',
            'img' => asset('images/1.png'),
            'bio' => 'A passionate software engineer who enjoys solving complex problems and building scalable applications. I am always exploring new technologies and pushing the limits of what can be done with code. In my free time, I like to read books on philosophy, play chess, and travel to new places.',
            'linkedin' => 'https://www.linkedin.com/in/hiroshithk',
            'instagram' => 'https://www.instagram.com/hiroshithk',
            'twitter' => 'https://twitter.com/hiroshithk',
            'education' => 'M.Sc in Computer Science - Kyoto University',
            'moto' => 'Code hard, stay humble.',
            'specialization' => 'Software Development, Cloud Computing, & AI',
        ]);

        Author::create([
            'name' => 'Jin Mei Ling',
            'username' => 'jinmeiling',
            'email' => 'jinmeiling@techworld.com',
            'img' => asset('images/2.png'),
            'bio' => 'I am a UX/UI designer and front-end developer with a passion for creating user-centered designs and seamless digital experiences. I love experimenting with new design trends and collaborating with others to bring creative ideas to life.',
            'linkedin' => 'https://www.linkedin.com/in/jinmeiling',
            'instagram' => 'https://www.instagram.com/jinmeiling',
            'twitter' => 'https://twitter.com/jinmeiling',
            'education' => 'B.A. in Graphic Design - Beijing University',
            'moto' => 'Design is not just what it looks like, design is how it works.',
            'specialization' => 'UX/UI Design, Front-End Development, & Web Accessibility',
        ]);

        Author::create([
            'name' => 'Minho Kim',
            'username' => 'minho.kim',
            'email' => 'minho.kim@koreansoul.com',
            'img' => asset('images/3.png'),
            'bio' => 'A software architect passionate about designing systems that scale and perform. Always looking for the next big challenge in tech, whether that’s in blockchain, machine learning, or distributed systems.',
            'linkedin' => 'https://www.linkedin.com/in/minhokim',
            'instagram' => 'https://www.instagram.com/minhokim',
            'twitter' => 'https://twitter.com/minhokim',
            'education' => 'Ph.D. in Computer Engineering - KAIST',
            'moto' => 'Technology is the art of the possible.',
            'specialization' => 'System Architecture, Cloud Computing, & Blockchain',
        ]);

        Author::create([
            'name' => 'Yuki Sato',
            'username' => 'yukisato',
            'email' => 'yuki.sato@digitalworld.com',
            'img' => asset('images/4.png'),
            'bio' => 'A tech enthusiast who loves to explore new trends in web development and mobile apps. I believe in building products that solve real-world problems and bring value to users.',
            'linkedin' => 'https://www.linkedin.com/in/yukisato',
            'instagram' => 'https://www.instagram.com/yukisato',
            'twitter' => 'https://twitter.com/yukisato',
            'education' => 'B.S. in Software Engineering - University of Tokyo',
            'moto' => 'Innovation starts with curiosity.',
            'specialization' => 'Mobile Development, Web Development, & App Design',
        ]);

        Author::create([
            'name' => 'Takeshi Nakamura',
            'username' => 'takeshinakamura',
            'email' => 'takeshi.nakamura@techspace.com',
            'img' => asset('images/5.png'),
            'bio' => 'Software engineer with a focus on backend systems. I enjoy creating efficient and scalable solutions that power modern applications. My passions include coding, cloud architecture, and DevOps.',
            'linkedin' => 'https://www.linkedin.com/in/takeshinakamura',
            'instagram' => 'https://www.instagram.com/takeshinakamura',
            'twitter' => 'https://twitter.com/takeshinakamura',
            'education' => 'M.S. in Computer Science - Osaka University',
            'moto' => 'Code with purpose, execute with precision.',
            'specialization' => 'Backend Development, Cloud Services, & DevOps',
        ]);

        Author::create([
            'name' => 'Siti Khadijah',
            'username' => 'sitikhadijah',
            'email' => 'siti.khadijah@techiehub.com',
            'img' => asset('images/6.png'),
            'bio' => 'Tech advocate and digital marketer who believes in the power of technology to transform businesses. I enjoy building strategies that bridge the gap between technology and the user experience.',
            'linkedin' => 'https://www.linkedin.com/in/sitikhadijah',
            'instagram' => 'https://www.instagram.com/sitikhadijah',
            'twitter' => 'https://twitter.com/sitikhadijah',
            'education' => 'B.A. in Digital Marketing - Seoul National University',
            'moto' => 'Technology is only as good as the people who use it.',
            'specialization' => 'Digital Marketing, Social Media Strategy, & User Research',
        ]);

        Author::create([
            'name' => 'Ryuji Tanaka',
            'username' => 'ryujitanaka',
            'email' => 'ryuji.tanaka@webdevspace.com',
            'img' => asset('images/7.png'),
            'bio' => 'Frontend developer with a passion for creating interactive and visually appealing web applications. I specialize in React and modern JavaScript frameworks.',
            'linkedin' => 'https://www.linkedin.com/in/ryujitanaka',
            'instagram' => 'https://www.instagram.com/ryujitanaka',
            'twitter' => 'https://twitter.com/ryujitanaka',
            'education' => 'B.Sc. in Web Development - University of Kyoto',
            'moto' => 'Good code is like a good story.',
            'specialization' => 'Frontend Development, React, & JavaScript',
        ]);

        Author::create([
            'name' => 'Hana Lee',
            'username' => 'hanalee',
            'email' => 'hana.lee@creativecoding.com',
            'img' => asset('images/8.png'),
            'bio' => 'Creative coder who loves to experiment with new technologies. I enjoy building creative projects that combine art and technology to deliver unique user experiences.',
            'linkedin' => 'https://www.linkedin.com/in/hanalee',
            'instagram' => 'https://www.instagram.com/hanalee',
            'twitter' => 'https://twitter.com/hanalee',
            'education' => 'B.A. in Media Arts & Technology - Hong Kong University',
            'moto' => 'Creativity is intelligence having fun.',
            'specialization' => 'Creative Coding, Web Design, & Interactive Media',
        ]);

        Author::create([
            'name' => 'Jin Park',
            'username' => 'jinpark',
            'email' => 'jin.park@techsavvy.com',
            'img' => asset('images/9.png'),
            'bio' => 'Full-stack developer with a focus on creating user-centric applications. I work with both frontend and backend technologies to build scalable web solutions.',
            'linkedin' => 'https://www.linkedin.com/in/jinpark',
            'instagram' => 'https://www.instagram.com/jinpark',
            'twitter' => 'https://twitter.com/jinpark',
            'education' => 'M.Sc. in Web Technologies - Peking University',
            'moto' => 'Balance is key, in life and in code.',
            'specialization' => 'Full-stack Development, API Development, & Web Technologies',
        ]);

        Author::create([
            'name' => 'Yumiko Yoshida',
            'username' => 'yumikoyoshida',
            'email' => 'yumiko.yoshida@digitaldev.com',
            'img' => asset('images/10.png'),
            'bio' => 'A passionate developer who loves to build applications that are not only functional but also intuitive and beautiful. I specialize in crafting user-friendly interfaces with modern frameworks.',
            'linkedin' => 'https://www.linkedin.com/in/yumikoyoshida',
            'instagram' => 'https://www.instagram.com/yumikoyoshida',
            'twitter' => 'https://twitter.com/yumikoyoshida',
            'education' => 'B.Sc. in Software Development - University of Tokyo',
            'moto' => 'Design with purpose, code with passion.',
            'specialization' => 'UI/UX Design, Frontend Development, & Web Design',
        ]);

        Author::create([
            'name' => 'Akira Kobayashi',
            'username' => 'akirakobayashi',
            'email' => 'akira.kobayashi@techguru.com',
            'img' => asset('images/11.png'),
            'bio' => 'Backend engineer with a passion for optimizing databases and designing efficient systems. I enjoy tackling complex problems and building scalable architectures.',
            'linkedin' => 'https://www.linkedin.com/in/akirakobayashi',
            'instagram' => 'https://www.instagram.com/akirakobayashi',
            'twitter' => 'https://twitter.com/akirakobayashi',
            'education' => 'M.Sc. in Data Science - University of Tokyo',
            'moto' => 'Strive for progress, not perfection.',
            'specialization' => 'Backend Development, Database Management, & System Design',
        ]);

        Author::create([
            'name' => 'Akiyo Fujiwara',
            'username' => 'akiyofujiwara',
            'email' => 'akiyo.fujiwara@webworks.com',
            'img' => asset('images/12.png'),
            'bio' => 'Front-end developer focused on making interactive, responsive, and user-friendly websites. I believe in clean code and engaging design.',
            'linkedin' => 'https://www.linkedin.com/in/akiyofujiwara',
            'instagram' => 'https://www.instagram.com/akiyofujiwara',
            'twitter' => 'https://twitter.com/akiyofujiwara',
            'education' => 'B.A. in Web Design - Kyushu University',
            'moto' => 'Simplicity is the ultimate sophistication.',
            'specialization' => 'Frontend Development, Web Design, & User Interface Design',
        ]);

        Author::create([
            'name' => 'Jiwon Lim',
            'username' => 'jiwonlim',
            'email' => 'jiwon.lim@geektech.com',
            'img' => asset('images/13.png'),
            'bio' => 'A passionate developer who thrives on solving real-world problems through technology. Focused on building scalable and high-performance applications.',
            'linkedin' => 'https://www.linkedin.com/in/jiwonlim',
            'instagram' => 'https://www.instagram.com/jiwonlim',
            'twitter' => 'https://twitter.com/jiwonlim',
            'education' => 'B.S. in Computer Science - Seoul National University',
            'moto' => 'Great code starts with a great plan.',
            'specialization' => 'Full-stack Development, Cloud Computing, & Software Engineering',
        ]);

        Author::create([
            'name' => 'Mai Linh Tran',
            'username' => 'mailinhtran',
            'email' => 'mai.linh.tran@webdev.com',
            'img' => asset('images/14.png'),
            'bio' => 'I’m a web developer with a love for learning new technologies and building user-friendly websites. I enjoy working with clients to bring their ideas to life.',
            'linkedin' => 'https://www.linkedin.com/in/mailinhtran',
            'instagram' => 'https://www.instagram.com/mailinhtran',
            'twitter' => 'https://twitter.com/mailinhtran',
            'education' => 'B.A. in Information Technology - Hanoi University',
            'moto' => 'Web development is art, code is the brush.',
            'specialization' => 'Web Development, Frontend Technologies, & UI/UX Design',
        ]);

        Author::create([
            'name' => 'Chen Wei',
            'username' => 'chenwei',
            'email' => 'chen.wei@devsolutions.com',
            'img' => asset('images/15.png'),
            'bio' => 'A skilled backend developer who specializes in building microservices and working with cloud infrastructures to ensure scalable, secure applications.',
            'linkedin' => 'https://www.linkedin.com/in/chenwei',
            'instagram' => 'https://www.instagram.com/chenwei',
            'twitter' => 'https://twitter.com/chenwei',
            'education' => 'M.Sc. in Cloud Computing - Tsinghua University',
            'moto' => 'Build once, scale forever.',
            'specialization' => 'Microservices, Cloud Computing, & API Development',
        ]);

        Author::create([
            'name' => 'Hiroki Yamada',
            'username' => 'hirokiyamada',
            'email' => 'hiroki.yamada@digitaldev.com',
            'img' => asset('images/16.png'),
            'bio' => 'I am a software developer who is constantly exploring new technologies and pushing the boundaries of what is possible with code. My main focus is on creating high-quality applications.',
            'linkedin' => 'https://www.linkedin.com/in/hirokiyamada',
            'instagram' => 'https://www.instagram.com/hirokiyamada',
            'twitter' => 'https://twitter.com/hirokiyamada',
            'education' => 'Ph.D. in Software Engineering - University of Osaka',
            'moto' => 'Quality over quantity.',
            'specialization' => 'Full-stack Development, Cloud Infrastructure, & DevOps',
        ]);

        Author::create([
            'name' => 'Soojin Kim',
            'username' => 'soojinkim',
            'email' => 'soojin.kim@techsphere.com',
            'img' => asset('images/17.png'),
            'bio' => 'A dedicated full-stack developer passionate about building web applications that are functional, secure, and efficient. I enjoy learning new frameworks and collaborating on big projects.',
            'linkedin' => 'https://www.linkedin.com/in/soojinkim',
            'instagram' => 'https://www.instagram.com/soojinkim',
            'twitter' => 'https://twitter.com/soojinkim',
            'education' => 'B.S. in Information Systems - Korea University',
            'moto' => 'Solve problems with code.',
            'specialization' => 'Full-stack Development, Security, & Web Architecture',
        ]);

        Author::create([
            'name' => 'Mei Chang',
            'username' => 'meichang',
            'email' => 'mei.chang@cloudcomputing.com',
            'img' => asset('images/18.png'),
            'bio' => 'A cloud engineer who builds and manages scalable cloud infrastructure. My goal is to create solutions that are reliable, cost-effective, and efficient.',
            'linkedin' => 'https://www.linkedin.com/in/meichang',
            'instagram' => 'https://www.instagram.com/meichang',
            'twitter' => 'https://twitter.com/meichang',
            'education' => 'M.Sc. in Cloud Engineering - Peking University',
            'moto' => 'Infrastructure first.',
            'specialization' => 'Cloud Engineering, DevOps, & Cloud Architecture',
        ]);

        Author::create([
            'name' => 'Liang Zhang',
            'username' => 'liangzhang',
            'email' => 'liang.zhang@techhub.com',
            'img' => asset('images/19.png'),
            'bio' => 'A data scientist who loves to turn raw data into actionable insights using machine learning and statistical methods. I focus on delivering high-quality, data-driven results.',
            'linkedin' => 'https://www.linkedin.com/in/liangzhang',
            'instagram' => 'https://www.instagram.com/liangzhang',
            'twitter' => 'https://twitter.com/liangzhang',
            'education' => 'M.Sc. in Data Science - Shanghai Jiao Tong University',
            'moto' => 'Data is the new oil.',
            'specialization' => 'Data Science, Machine Learning, & AI Algorithms',
        ]);

        Author::create([
            'name' => 'Kenjiro Nishida',
            'username' => 'kenjiro.nishida',
            'email' => 'kenjiro.nishida@techworld.com',
            'img' => asset('images/20.png'),
            'bio' => 'I am a software developer focused on building scalable applications with clean, efficient code. I enjoy working in agile teams and delivering products that users love.',
            'linkedin' => 'https://www.linkedin.com/in/kenjiro.nishida',
            'instagram' => 'https://www.instagram.com/kenjiro.nishida',
            'twitter' => 'https://twitter.com/kenjiro.nishida',
            'education' => 'B.A. in Computer Science - Hokkaido University',
            'moto' => 'The best code is the code that works.',
            'specialization' => 'Software Development, Agile Practices, & System Architecture',
        ]);

        Author::create([
            'name' => 'Minseo Park',
            'username' => 'minseopark',
            'email' => 'minseo.park@codestream.io',
            'img' => asset('images/21.png'),
            'bio' => 'Tech enthusiast with a knack for front-end wizardry and clean UI/UX. When not coding, I’m usually sketching interfaces or diving into design systems.',
            'linkedin' => 'https://www.linkedin.com/in/minseopark',
            'instagram' => 'https://www.instagram.com/minseopark',
            'twitter' => 'https://twitter.com/minseopark',
            'education' => 'B.Des. in Visual Communication - Ewha Womans University',
            'moto' => 'Design with intention, code with precision.',
            'specialization' => 'UI/UX Design, Front-end Development, & Prototyping',
        ]);

        Author::create([
            'name' => 'Yuxi Li',
            'username' => 'yuxili',
            'email' => 'yuxi.li@dataalchemy.com',
            'img' => asset('images/22.png'),
            'bio' => 'Data whisperer and machine learning enthusiast who turns datasets into stories. Passionate about predictive analytics and AI applications.',
            'linkedin' => 'https://www.linkedin.com/in/yuxili',
            'instagram' => 'https://www.instagram.com/yuxili',
            'twitter' => 'https://twitter.com/yuxili',
            'education' => 'M.Sc. in Machine Learning - Fudan University',
            'moto' => 'Predict the future by learning from the past.',
            'specialization' => 'Data Science, Machine Learning, & Predictive Analytics',
        ]);

        Author::create([
            'name' => 'Kazuki Tanaka',
            'username' => 'kazukitanaka',
            'email' => 'kazuki.tanaka@devsquad.com',
            'img' => asset('images/23.png'),
            'bio' => 'I code. I test. I repeat. Full-stack engineer who loves building robust applications and automating everything.',
            'linkedin' => 'https://www.linkedin.com/in/kazukitanaka',
            'instagram' => 'https://www.instagram.com/kazukitanaka',
            'twitter' => 'https://twitter.com/kazukitanaka',
            'education' => 'B.Sc. in Information Technology - Nagoya University',
            'moto' => 'Automate the boring stuff.',
            'specialization' => 'Automation, Full-stack Engineering, & Software Architecture',
        ]);

        Author::create([
            'name' => 'Nguyen Thi Thu',
            'username' => 'nguyenthithu',
            'email' => 'nguyen.thu@vntech.io',
            'img' => asset('images/24.png'),
            'bio' => 'Web artisan from Hanoi with love for CSS animations and clean interfaces. Always exploring new front-end tools and frameworks.',
            'linkedin' => 'https://www.linkedin.com/in/nguyenthithu',
            'instagram' => 'https://www.instagram.com/nguyenthithu',
            'twitter' => 'https://twitter.com/nguyenthithu',
            'education' => 'B.A. in Web Development - Vietnam National University',
            'moto' => 'Every pixel counts.',
            'specialization' => 'CSS, JavaScript Frameworks, & User Interaction',
        ]);

        Author::create([
            'name' => 'Takeshi Yamamoto',
            'username' => 'takeshiyamamoto',
            'email' => 'takeshi.yamamoto@infraengineers.com',
            'img' => asset('images/25.png'),
            'bio' => 'DevOps engineer with a focus on CI/CD, infrastructure as code, and building reliable deployment pipelines.',
            'linkedin' => 'https://www.linkedin.com/in/takeshiyamamoto',
            'instagram' => 'https://www.instagram.com/takeshiyamamoto',
            'twitter' => 'https://twitter.com/takeshiyamamoto',
            'education' => 'B.Eng. in Computer Systems - Tokyo Tech',
            'moto' => 'Ship faster, safer, smarter.',
            'specialization' => 'DevOps, CI/CD, & Infrastructure Automation',
        ]);


        Author::create([
            'name' => 'Hana Kim',
            'username' => 'hanakim',
            'email' => 'hana.kim@softdive.kr',
            'img' => asset('images/26.png'),
            'bio' => 'Penggemar drama Korea dan debugging HTML yang kadang bikin galau. Frontend developer dengan semangat pixel-perfect.',
            'linkedin' => 'https://www.linkedin.com/in/hanakim',
            'instagram' => 'https://www.instagram.com/hanakim',
            'twitter' => 'https://twitter.com/hanakim',
            'education' => 'B.Sc. in Computer Engineering - Korea University',
            'moto' => 'Code. Sleep. K-Drama. Repeat.',
            'specialization' => 'HTML/CSS, Responsive Design, & Front-end Optimization',
        ]);

        Author::create([
            'name' => 'Wei Zhang',
            'username' => 'weizhang',
            'email' => 'wei.zhang@codelab.cn',
            'img' => asset('images/27.png'),
            'bio' => 'Backend developer asal Shanghai yang demen banget ngulik API dan bikin sistem autentikasi yang aman tapi nggak ribet.',
            'linkedin' => 'https://www.linkedin.com/in/weizhang',
            'instagram' => 'https://www.instagram.com/weizhang',
            'twitter' => 'https://twitter.com/weizhang',
            'education' => 'M.Sc. in Information Systems - Tsinghua University',
            'moto' => 'Security starts with simplicity.',
            'specialization' => 'API Development, Security, & Backend Engineering',
        ]);

        Author::create([
            'name' => 'Haruto Saito',
            'username' => 'harutosaito',
            'email' => 'haruto.saito@devsky.jp',
            'img' => asset('images/28.png'),
            'bio' => 'Doyan bikin bot Telegram buat bantuin kerja kelompok. Haruto si tukang ngulik Python & AI tools terbaru.',
            'linkedin' => 'https://www.linkedin.com/in/harutosaito',
            'instagram' => 'https://www.instagram.com/harutosaito',
            'twitter' => 'https://twitter.com/harutosaito',
            'education' => 'B.Eng. in Software Engineering - Osaka Institute of Technology',
            'moto' => 'Let your code work while you sleep.',
            'specialization' => 'Python, AI Automation, & Chatbot Dev',
        ]);

        Author::create([
            'name' => 'Sornnarin Nopphon',
            'username' => 'sornnarin',
            'email' => 'sorn.nopphon@bangkokdevs.co.th',
            'img' => asset('images/29.png'),
            'bio' => 'Full-stack dari Thailand yang percaya debugging itu seni. Fans berat framework Laravel & Vue.',
            'linkedin' => 'https://www.linkedin.com/in/sornnarin',
            'instagram' => 'https://www.instagram.com/sornnarin',
            'twitter' => 'https://twitter.com/sornnarin',
            'education' => 'B.Sc. in Computer Science - Chulalongkorn University',
            'moto' => 'Build fast, fix faster.',
            'specialization' => 'Laravel, Vue.js, & RESTful APIs',
        ]);

        Author::create([
            'name' => 'Meilin Luo',
            'username' => 'meilinluo',
            'email' => 'meilin.luo@devchina.com',
            'img' => asset('images/30.png'),
            'bio' => 'Software tester yang suka cari bug lebih dari cari diskon. Meilin ahli dalam quality assurance dan test automation.',
            'linkedin' => 'https://www.linkedin.com/in/meilinluo',
            'instagram' => 'https://www.instagram.com/meilinluo',
            'twitter' => 'https://twitter.com/meilinluo',
            'education' => 'B.Sc. in Software Testing - Zhejiang University',
            'moto' => 'Break it before users do.',
            'specialization' => 'QA, Test Automation, & Bug Tracking',
        ]);

        Author::create([
            'name' => 'Riku Nakamura',
            'username' => 'rikunakamura',
            'email' => 'riku.nakamura@techjapan.jp',
            'img' => asset('images/31.png'),
            'bio' => 'Mobile developer yang jatuh cinta sama Flutter. Paling semangat ngoding pas hujan deras sambil nyeruput kopi.',
            'linkedin' => 'https://www.linkedin.com/in/rikunakamura',
            'instagram' => 'https://www.instagram.com/rikunakamura',
            'twitter' => 'https://twitter.com/rikunakamura',
            'education' => 'B.Sc. in Mobile Computing - Kyoto University',
            'moto' => 'One codebase, all platforms.',
            'specialization' => 'Flutter, Dart, & Mobile UX',
        ]);

        Author::create([
            'name' => 'Xiao Yu',
            'username' => 'xiaoyu',
            'email' => 'xiao.yu@techworld.cn',
            'img' => asset('images/32.png'),
            'bio' => 'Cloud engineer yang suka naik gunung. Nge-deploy sambil camping? Gas aja!',
            'linkedin' => 'https://www.linkedin.com/in/xiaoyu',
            'instagram' => 'https://www.instagram.com/xiaoyu',
            'twitter' => 'https://twitter.com/xiaoyu',
            'education' => 'M.Sc. in Cloud Computing - Shanghai Jiao Tong University',
            'moto' => 'Scale everything.',
            'specialization' => 'AWS, Docker, & Kubernetes',
        ]);

        Author::create([
            'name' => 'Thanakorn Boonmee',
            'username' => 'thanakornbm',
            'email' => 'thanakorn.bm@techthai.co',
            'img' => asset('images/33.png'),
            'bio' => 'UI Designer yang perfeksionis dan bisa ngabisin waktu 3 jam cuma buat atur spacing antar elemen.',
            'linkedin' => 'https://www.linkedin.com/in/thanakornbm',
            'instagram' => 'https://www.instagram.com/thanakornbm',
            'twitter' => 'https://twitter.com/thanakornbm',
            'education' => 'B.Des. in Digital Arts - King Mongkut’s Institute',
            'moto' => 'Design is in the details.',
            'specialization' => 'UI/UX, Typography, & Prototyping',
        ]);

        Author::create([
            'name' => 'Sakura Chen',
            'username' => 'sakurachen',
            'email' => 'sakura.chen@coderose.cn',
            'img' => asset('images/34.png'),
            'bio' => 'React developer yang kalau lagi stuck ngoding suka curhat ke tanaman hiasnya.',
            'linkedin' => 'https://www.linkedin.com/in/sakurachen',
            'instagram' => 'https://www.instagram.com/sakurachen',
            'twitter' => 'https://twitter.com/sakurachen',
            'education' => 'B.Sc. in Web Engineering - Beijing University of Technology',
            'moto' => 'Think in components.',
            'specialization' => 'React.js, Tailwind CSS, & Web Performance',
        ]);

        Author::create([
            'name' => 'Jiro Fujimoto',
            'username' => 'jirofujimoto',
            'email' => 'jiro.fujimoto@devwave.jp',
            'img' => asset('images/35.png'),
            'bio' => 'Coder by day, DJ by night. Specialis ngoding sambil dengerin EDM keras-keras.',
            'linkedin' => 'https://www.linkedin.com/in/jirofujimoto',
            'instagram' => 'https://www.instagram.com/jirofujimoto',
            'twitter' => 'https://twitter.com/jirofujimoto',
            'education' => 'B.Eng. in Electrical Engineering - Hokkaido University',
            'moto' => 'Code your rhythm.',
            'specialization' => 'C++, Embedded Systems, & Audio Processing',
        ]);

        Author::create([
            'name' => 'Min Ji Lee',
            'username' => 'minjilee',
            'email' => 'min.ji@seoultech.co.kr',
            'img' => asset('images/36.png'),
            'bio' => 'UI/UX researcher yang bisa bengong satu jam cuma buat mikirin kenapa user klik tombol yang salah. Pecinta sticky notes dan whiteboard penuh coretan.',
            'linkedin' => 'https://www.linkedin.com/in/minjilee',
            'instagram' => 'https://www.instagram.com/minjilee',
            'twitter' => 'https://twitter.com/minjilee',
            'education' => 'M.Des. in Human-Computer Interaction - Yonsei University',
            'moto' => 'Design with empathy.',
            'specialization' => 'User Research, Usability Testing, & UX Strategy',
        ]);

        Author::create([
            'name' => 'Kaito Watanabe',
            'username' => 'kaitowtnb',
            'email' => 'kaito.wtnb@techsamurai.jp',
            'img' => asset('images/37.png'),
            'bio' => 'DevOps engineer yang bawa laptop ke mana-mana, takut kalau server down pas lagi makan ramen.',
            'linkedin' => 'https://www.linkedin.com/in/kaitowatanabe',
            'instagram' => 'https://www.instagram.com/kaitowatanabe',
            'twitter' => 'https://twitter.com/kaitowatanabe',
            'education' => 'B.Sc. in Computer Networks - Tokyo Tech',
            'moto' => 'Automate till it breaks.',
            'specialization' => 'CI/CD, Linux Server, & Cloud Deployment',
        ]);

        Author::create([
            'name' => 'Ayu Matsumoto',
            'username' => 'ayumatsu',
            'email' => 'ayu.matsu@devhikari.jp',
            'img' => asset('images/38.png'),
            'bio' => 'Tech writer yang bisa nyulap kode ribet jadi artikel yang bisa dipahami anak SD. Sering typo tapi niat banget.',
            'linkedin' => 'https://www.linkedin.com/in/ayumatsumoto',
            'instagram' => 'https://www.instagram.com/ayumatsumoto',
            'twitter' => 'https://twitter.com/ayumatsumoto',
            'education' => 'B.A. in Technical Communication - University of Tsukuba',
            'moto' => 'Write like you’re explaining to your grandma.',
            'specialization' => 'Documentation, Blog Writing, & Dev Advocacy',
        ]);

        Author::create([
            'name' => 'Phuwin Ratchapol',
            'username' => 'phuwinr',
            'email' => 'phuwin.ratchapol@thaitronic.dev',
            'img' => asset('images/39.png'),
            'bio' => 'Data scientist dari Bangkok yang bisa ngabisin weekend buat bersihin dataset doang. Suka ngopi item tanpa gula.',
            'linkedin' => 'https://www.linkedin.com/in/phuwinratchapol',
            'instagram' => 'https://www.instagram.com/phuwinr',
            'twitter' => 'https://twitter.com/phuwinr',
            'education' => 'M.Sc. in Data Science - Mahidol University',
            'moto' => 'In data we trust.',
            'specialization' => 'Data Cleaning, Machine Learning, & Predictive Modeling',
        ]);

        Author::create([
            'name' => 'Linh Tran',
            'username' => 'linhtran',
            'email' => 'linh.tran@vietdev.vn',
            'img' => asset('images/40.png'),
            'bio' => 'Suka PHP dan bangga. Ngoding Laravel sambil karaoke lagu BTS? Bisa banget.',
            'linkedin' => 'https://www.linkedin.com/in/linhtran',
            'instagram' => 'https://www.instagram.com/linhtran',
            'twitter' => 'https://twitter.com/linhtran',
            'education' => 'B.Eng. in Software Engineering - Vietnam National University',
            'moto' => 'Code first, karaoke later.',
            'specialization' => 'Laravel, PHP, & API Integration',
        ]);

        Author::create([
            'name' => 'Ryota Tanaka',
            'username' => 'ryotatanaka',
            'email' => 'ryota.tanaka@binarysushi.jp',
            'img' => asset('images/41.png'),
            'bio' => 'Suka pakai Vim, benci mouse. Ryota si keyboard warrior sejati.',
            'linkedin' => 'https://www.linkedin.com/in/ryotatanaka',
            'instagram' => 'https://www.instagram.com/ryotatanaka',
            'twitter' => 'https://twitter.com/ryotatanaka',
            'education' => 'B.Sc. in Software Architecture - Nagoya Institute of Tech',
            'moto' => 'Esc :wq',
            'specialization' => 'Vim, Linux, & Terminal Tools',
        ]);

        Author::create([
            'name' => 'Chae Eun Park',
            'username' => 'chaeunpark',
            'email' => 'chae.eun@devkr.net',
            'img' => asset('images/42.png'),
            'bio' => 'QA engineer yang suka ngasih bug report berasa surat cinta. Sering menang debat sama developer (dan menang).',
            'linkedin' => 'https://www.linkedin.com/in/chaeunpark',
            'instagram' => 'https://www.instagram.com/chaeunpark',
            'twitter' => 'https://twitter.com/chaeunpark',
            'education' => 'B.Sc. in Information Systems - Ewha Womans University',
            'moto' => 'Quality over everything.',
            'specialization' => 'Test Case Design, QA Automation, & Regression Testing',
        ]);

        Author::create([
            'name' => 'Yuki Takahashi',
            'username' => 'yukitkhs',
            'email' => 'yuki.takahashi@tokyobinary.jp',
            'img' => asset('images/43.png'),
            'bio' => 'Dev yang tiap hari ngopi 3x dan deploy minimal sekali. Minimalisme dan bugless hidupnya.',
            'linkedin' => 'https://www.linkedin.com/in/yukitakahashi',
            'instagram' => 'https://www.instagram.com/yukitkhs',
            'twitter' => 'https://twitter.com/yukitkhs',
            'education' => 'B.Eng. in Information Technology - Tokyo University',
            'moto' => 'Less is more, except for coffee.',
            'specialization' => 'Clean Code, Laravel, & Git Workflow',
        ]);

        Author::create([
            'name' => 'Nguyen Bao',
            'username' => 'nguyenbao',
            'email' => 'nguyen.bao@devvn.vn',
            'img' => asset('images/44.png'),
            'bio' => 'Dev part-time, tukang servis laptop full-time. Fixin bug dan fixin hardware udah kayak dua sisi koin.',
            'linkedin' => 'https://www.linkedin.com/in/nguyenbao',
            'instagram' => 'https://www.instagram.com/nguyenbao',
            'twitter' => 'https://twitter.com/nguyenbao',
            'education' => 'B.Sc. in IT Support - Hanoi University of Science & Tech',
            'moto' => 'Debug inside and outside.',
            'specialization' => 'Tech Support, Dev Tools, & Hardware Troubleshooting',
        ]);

        Author::create([
            'name' => 'Mi Sun Yoo',
            'username' => 'misunyoo',
            'email' => 'misun.yoo@codecore.kr',
            'img' => asset('images/45.png'),
            'bio' => 'Frontend dev yang susah move on dari jQuery tapi lagi PDKT sama React. Paling jago styling pake Tailwind.',
            'linkedin' => 'https://www.linkedin.com/in/misunyoo',
            'instagram' => 'https://www.instagram.com/misunyoo',
            'twitter' => 'https://twitter.com/misunyoo',
            'education' => 'B.Sc. in Digital Technology - Korea National Open University',
            'moto' => 'Styled to perfection.',
            'specialization' => 'React, TailwindCSS, & jQuery Nostalgia',
        ]);

        Author::create([
            'name' => 'Umar Baihaqi',
            'username' => 'baihaqiyo',
            'email' => 'justnuqthoh@gmail.com',
            'img' => asset('images/46.png'),
            'bio' => 'Seorang penjelajah dunia digital yang hobi ngopi sambil ngoding tengah malam. Pernah nyasar ke dunia desain grafis tapi akhirnya jatuh cinta sama baris-baris kode yang penuh tanda kurung dan titik koma.',
            'linkedin' => 'https://www.linkedin.com/in/umarbaihaqi',
            'instagram' => 'https://www.instagram.com/haq_xgi',
            'twitter' => 'https://twitter.com/skyrthym',
            'education' => 'B.Sc in Informatics Enginering - University of Darussalam Gontor',
            'moto' => 'Limitation is not limit',
            'specialization' => 'Programming, Credit Cards, & Credit Reports',
        ]);


        Author::create([
            'name' => 'Jessica Kart',
            'email' => 'jessiekartt@gmail.com',
            'username' => 'kartkart',
            'img' => asset('images/47.png'),
            'bio' => 'UI/UX designer yang lebih sering ngedesain di kafe daripada di kantor. Moodboard lebih rapi dari kamar sendiri.',
            'linkedin' => 'https://www.linkedin.com/in/jessicakart',
            'instagram' => 'https://www.instagram.com/kartkart',
            'twitter' => 'https://twitter.com/kartkart',
            'education' => 'B.Des. in Visual Communication - RMIT University',
            'moto' => 'Design is intelligence made visible.',
            'specialization' => 'Figma, Prototyping, & Mobile UI',
        ]);

        Author::create([
            'name' => 'Hannah Abigail',
            'email' => 'hannahabigail@gmail.com',
            'username' => 'hannahha',
            'img' => asset('images/48.png'),
            'bio' => 'Tech content creator dan blogger yang hobi nulis review framework sambil ngopi. Sering disangka AI karena ngetiknya ngebut.',
            'linkedin' => 'https://www.linkedin.com/in/hannahabigail',
            'instagram' => 'https://www.instagram.com/hannahha',
            'twitter' => 'https://twitter.com/hannahha',
            'education' => 'B.A. in Media & Communication - University of Melbourne',
            'moto' => 'Type fast, write smart.',
            'specialization' => 'Technical Writing, Blogging, & Dev Marketing',
        ]);

        Author::create([
            'name' => 'Sakura Miyawaki',
            'email' => 'sakuramiyawaki@gmail.com',
            'username' => 'kkura9',
            'img' => asset('images/49.png'),
            'bio' => 'Frontend developer yang hobi mix Tailwind dan anime aesthetic. Bikin landing page kayak ngatur feed Instagram.',
            'linkedin' => 'https://www.linkedin.com/in/sakuramiyawaki',
            'instagram' => 'https://www.instagram.com/kkura9',
            'twitter' => 'https://twitter.com/kkura9',
            'education' => 'B.Sc. in Web Design & Development - Kyoto Institute of Tech',
            'moto' => 'Pretty code, pretty pixels.',
            'specialization' => 'HTML/CSS, Tailwind, & Vue.js',
        ]);

        Author::create([
            'name' => 'Kezia Amara',
            'email' => 'bananasbloom@gmail.com',
            'username' => 'keznath',
            'img' => asset('images/50.png'),
            'bio' => 'Fullstack dev yang suka eksperimen framework baru tiap minggu, tapi project-nya tetep itu-itu aja. Punya playlist coding yang isinya lo-fi, OST anime, dan ceramah motivasi.',
            'linkedin' => 'https://www.linkedin.com/in/keziaamara',
            'instagram' => 'https://www.instagram.com/keznath',
            'twitter' => 'https://twitter.com/keznath',
            'education' => 'B.Sc in Software Engineering - Singapore Institute of Technology',
            'moto' => 'Just deploy it and pray.',
            'specialization' => 'Laravel, Vue.js, & DevOps',
        ]);
    }
}
// Seorang penjelajah dunia digital yang hobi ngopi sambil ngoding tengah malam. Pernah nyasar ke dunia desain grafis tapi akhirnya jatuh cinta sama baris-baris kode yang penuh tanda kurung dan titik koma. Punya mimpi sederhana: bisa bikin aplikasi yang dipakai jutaan orang—meski sekarang baru bisa bikin to-do list app yang lupa dikasih fitur hapus. Di luar dunia layar dan keyboard, dia suka nyari sunset, baca novel misteri, dan kadang nulis puisi yang nggak pernah diposting. Hidupnya diatur pakai sticky notes, meskipun kadang dia lupa di mana naro sticky notes-nya.