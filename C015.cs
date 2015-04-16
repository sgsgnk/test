public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        string n = System.Console.ReadLine();//番号
        string r1 = System.Console.ReadLine();//部屋の総数
        int r2 = int.Parse(r1);  
        int counter = 0;
        int total = 0;
            
            do
            {
                counter += 1;
                string rNum = System.Console.ReadLine(); 
                if(0 <= rNum.IndexOf(n))
                {
                    //System.Console.WriteLine("");
                }
                else
                {
                    System.Console.WriteLine(rNum);
                    total += 1;
                }
            }
            while(counter < r2);
        
        if(total == 0)
        {
            System.Console.WriteLine("none");
        }
    }
}
//全パスできました。