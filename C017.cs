public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        var parentNum = System.Console.ReadLine();
        string [] pN = parentNum.Split(new char[] {' '});
        int p1 = int.Parse(pN[0]);
        int p2 = int.Parse(pN[1]);
        
        var child = System.Console.ReadLine();
        int c = int.Parse(child);
        
        int counter;
        
        for(counter=0; counter<c; counter++)
        {
            var childNum = System.Console.ReadLine();
            string [] cN = childNum.Split(new char[] {' '});
            int c1 = int.Parse(cN[0]);
            int c2 = int.Parse(cN[1]);
            
            if(p1 > c1)
            {
                System.Console.WriteLine("High");
            }
            else if(p1 < c1)
            {
                System.Console.WriteLine("Low");
            }
            else
            {
                if(p2 < c2)
                {
                    System.Console.WriteLine("High");
                }
                else
                {
                    System.Console.WriteLine("Low");
                }
            }
        }
    }
}

//全パスできました！