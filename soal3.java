/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
public class Main
{
     static void opr(int n) {
        while (n != 1) {
            System.out.print(n + " ");

            if ((n & 1) == 1) {
                n = 3 * n + 1;
            } else {
                n = n / 2;
            }
        }
        System.out.print(n);
    }
	public static void main(String[] args) {
		opr(12);
	}
}
